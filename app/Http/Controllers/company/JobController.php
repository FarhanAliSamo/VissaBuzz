<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Industry;
use App\Models\JobExperience;
use App\Models\JobType;
use App\Models\Seniority;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
 

    public function index()
    {
        // $company_id = Auth::guard('company')->id();
        // $data = Job::with(['seniority', 'industry', 'jobType', 'experience', 'country', 'city'])->where('company_id',$company_id)->get();
        // dd($data);

        $industries = Industry::all();
        $seniorities = Seniority::all();
        $job_types = JobType::all();
        $job_experiences = JobExperience::all();
        $countries = Country::all();
 
        return view('company.job.index',compact('industries','seniorities','job_types','job_experiences','countries'));
    }

    
    public function get_cities($id)
    {
        $data = City::where('country_id', $id)->get();
        return response()->json(['data' => $data]);
    }


    public function show()
    {
        $data = Job::query(); // Use query for DataTable integration

        return DataTables::of($data)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('company.job.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }
 
    public function getJobsData()
    {
        $company_id = Auth::guard('company')->id();
        $data = Job::with(['seniority', 'industry', 'jobType', 'experience', 'country', 'city'])
                    ->where('company_id', $company_id)
                    ->get();

        return DataTables::of($data)
                ->editColumn('created_at', function ($d) {
                    return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
                })
                ->editColumn('updated_at', function ($d) {
                    return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
                })
            ->addColumn('actions', function ($d) {
                return view('company.job.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_title' => [
                'required',
                'string',
            ],
            'seniority_id' => [
                'required',
                 
            ],
            'industry_id' => [
                'required',
                
            ],
            'job_type_id' => [
                'required',
                 
            ],
            'experience_id' => [
                'required',
                
            ],
            'gender' => [
                'required',
                'string'
            ],
            'salary_from' => [
                'required',
                'integer'
            ],
            'salary_to' => [
                'required',
                'integer'
            ],
            'currency' => [
                'required',
                'string'
            ],
            'location' => [
                'required',
                'string'
            ],
            'country_id' => [
                'required',
                 
            ],
            'city_id' => [
                'required',
                
            ],
            'job_description' => [
                'required',
                'string'
            ],
            'candidate_profile' => [
                'required',
                'string'
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        
        if (Auth::guard('company')->check()) {
            $company_id = Auth::guard('company')->id();
            $job = Job::create(array_merge($request->all(), ['company_id' => $company_id]));
               
            return response()->json([
                'success' => true,
                'message' => 'Job Created Successfully',
                'data' => $job
            ]);
        }

        return response()->json([
            'success' => false,
            'errors' =>'We are sorry to invoice please login and try again'
        ], 500);

    }


    public function edit(Role $role)
    {
        $rolePermissions = DB::table('role_has_permissions')
                                ->where('role_has_permissions.role_id',$role->id)
                                ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                ->all();
        return response()->json(['data' => $role,'rolePermissions' => $rolePermissions]);

    }

    public function update(Request $request, Role $role)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:roles,name,' . $role->id
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permission);

        return response()->json([
            'success' => true,
            'message' => 'Role Updated',
            'data' => $role
        ]);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json([
            'success' => true,
            'message' => 'Role Deleted Successfully',
        ]);
    }
}

