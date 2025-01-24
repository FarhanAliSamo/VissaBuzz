<?php

namespace App\Http\Controllers\admin\job;

 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\JobExperience;
use Yajra\DataTables\Facades\DataTables;


class JobExperieneController extends Controller
{
 
    public function index()
    {
        
        return view('admin.job.job_experience.index');
    }

    public function show()
    {
        $job_experience = JobExperience::query(); // Use query for DataTable integration

        return DataTables::of($job_experience)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.job.job_experience.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:job_experiences,name'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $job_experience = JobExperience::create(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Experience Created Successfully',
            'data' => $job_experience
        ]);
    }


    public function edit(JobExperience $job_experience)
    {
         
        return response()->json(['data' => $job_experience]);

    }

    public function update(Request $request, JobExperience $job_experience)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:job_experiences,name,' . $job_experience->id
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $job_experience->update(['name' => $request->name]);
        
        return response()->json([
            'success' => true,
            'message' => 'Job Experience Updated',
            'data' => $job_experience
        ]);
    }

    public function destroy($id)
    {
        $job_experience = JobExperience::find($id);
        $job_experience->delete();

        return response()->json([
            'success' => true,
            'message' => 'Job Experience Deleted Successfully',
        ]);
    }
}

