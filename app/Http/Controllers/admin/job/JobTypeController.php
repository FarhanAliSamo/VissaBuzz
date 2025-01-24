<?php

namespace App\Http\Controllers\admin\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\JobType;
use Yajra\DataTables\Facades\DataTables;

 
class JobTypeController extends Controller
{
 
    public function index()
    {
        
        return view('admin.job.job_type.index');
    }

    public function show()
    {
        $data = JobType::query(); // Use query for DataTable integration

        return DataTables::of($data)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.job.job_type.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:job_types,name'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = JobType::create(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Type Created Successfully',
            'data' => $data
        ]);
    }


    public function edit(JobType $job_type)
    {
         
        return response()->json(['data' => $job_type]);

    }

    public function update(Request $request, JobType $job_type)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:job_types,name,' . $job_type->id
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $job_type->update(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Type Updated',
            'data' => $job_type
        ]);
    }

    public function destroy($id)
    {
        $data = JobType::find($id);
        $data->delete();

        return response()->json([
            'success' => true,
            'message' => 'Job Type Deleted Successfully',
        ]);
    }
}


