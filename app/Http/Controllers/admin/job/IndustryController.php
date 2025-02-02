<?php

namespace App\Http\Controllers\admin\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Industry;
use Yajra\DataTables\Facades\DataTables;


class IndustryController extends Controller
{
 
    public function index()
    {
        return view('admin.job.industry.index');
    }

    public function show()
    {
        $industry = Industry::query(); // Use query for DataTable integration

        return DataTables::of($industry)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.job.industry.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:industries,name',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'industries/images/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('industries/images'), $imagePath);
            $data['image'] = $imagePath;
        }

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconPath = 'industries/icons/' . time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('industries/icons'), $iconPath);
            $data['icon'] = $iconPath;
        }

        $industry = Industry::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Industry Created Successfully',
            'data' => $industry
        ]);
    }


    public function edit(Industry $industry)
    {
         
        return response()->json(['data' => $industry]);

    }

    public function update(Request $request, Industry $industry)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:industries,name,' . $industry->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'industries/images/' . time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('industries/images'), $imagePath);
            $data['image'] = $imagePath;
        }

        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $iconPath = 'industries/icons/' . time() . '_' . $icon->getClientOriginalName();
            $icon->move(public_path('industries/icons'), $iconPath);
            $data['icon'] = $iconPath;
        }

        $industry->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Industry Updated Successfully',
            'data' => $industry
        ]);
    }

    public function destroy($id)
    {
        
        $industry = Industry::find($id);
        // Delete the associated icon image if it exists
        if ($industry->icon) {
            $iconPath = public_path('industries/icons/' . $industry->icon);
            if (file_exists($iconPath)) {
                unlink($iconPath);
            }
        }

        // Delete the associated image if it exists
        if ($industry->image) {
            $imagePath = public_path('industries/images/' . $industry->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $industry->delete();

        return response()->json([
            'success' => true,
            'message' => 'Industry Deleted Successfully',
        ]);
    }
}

