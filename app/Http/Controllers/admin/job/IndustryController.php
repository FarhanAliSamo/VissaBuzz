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
            'name' => [
                'required',
                'string',
                'unique:industries,name'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $industry = Industry::create(['name' => $request->name]);
        
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
            'name' => [
                'required',
                'string',
                'unique:industries,name,' . $industry->id
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $industry->update(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Industry Updated',
            'data' => $industry
        ]);
    }

    public function destroy($id)
    {
        $industry = Industry::find($id);
        $industry->delete();

        return response()->json([
            'success' => true,
            'message' => 'Industry Deleted Successfully',
        ]);
    }
}

