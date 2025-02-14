<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;
 

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.role-permission.user.index',compact('roles'));
    }

    public function show()
    {
        $data = User::query(); // Use query for DataTable integration

        return DataTables::of($data)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('roles', function ($d) {
                $userRoles = $d->roles->pluck('name','name')->all();
                return view('admin.role-permission.user.roles_column', compact('userRoles')); // Create a separate view for buttons
            })
            ->addColumn('actions', function ($d) {
                return view('admin.role-permission.user.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'max:50'
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email',
                'max:50'
            ],
            'password' => [
                'required',
                'string',
                'min:4',
                'max:50'
            ],
            'roles' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->syncRoles($request->roles);

        return response()->json([
            'success' => true,
            'message' => 'User Created Successfully',
            'data' => $user
        ]);
    }


    public function edit(User $user)
    {
        $roles = Role::pluck('name')->all();
        $userRoles = $user->roles->pluck('name')->all();
        

        
        return response()->json([
            'data' => $user,
            'userRoles' => $userRoles,
            'roles' => $roles
        ]);

    }

    public function update(Request $request, User $user)
    {


        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'max:50'
            ],
            'password' => [
                'nullable',
                'string',
                'min:4',
                'max:50'
            ],
            'roles' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $data = [ 
            'name'=> $request->name,
            'email' => $request->email
        ];
        if($request->password){
            $data += [ 
                'password'=> Hash::make($request->password),
            ];
        }
        $user->update();
        $user->syncRoles($request->roles);

        return response()->json([
            'success' => true,
            'message' => 'User Updated',
            'data' => $user
        ]);
    }

    public function destroy($id)
    {
        
        $user = User::find($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User Deleted Successfully',
        ]);
    }
}





 