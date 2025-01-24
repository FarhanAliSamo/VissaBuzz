<?php

namespace App\Http\Controllers\admin\job;

 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Seniority;
use Yajra\DataTables\Facades\DataTables;

 
class SeniorityController extends Controller
{
 
    public function index()
    {
         
        return view('admin.job.job_seniority.index');
    }

    public function show()
    {
        $job_seniority = Seniority::query(); // Use query for DataTable integration

        return DataTables::of($job_seniority)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.job.job_seniority.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:seniorities,name'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $job_seniority = Seniority::create(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Seniority Created Successfully',
            'data' => $job_seniority
        ]);
    }


    public function edit(Seniority $job_seniority)
    {
         
        return response()->json(['data' => $job_seniority]);

    }

    public function update(Request $request, Seniority $job_seniority)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:seniorities,name,' . $job_seniority->id
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $job_seniority->update(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Seniority Updated',
            'data' => $job_seniority
        ]);
    }

    public function destroy($id)
    {
        $job_seniority = Seniority::find($id);
        $job_seniority->delete();

        return response()->json([
            'success' => true,
            'message' => 'Job Seniority Deleted Successfully',
        ]);
    }
}

