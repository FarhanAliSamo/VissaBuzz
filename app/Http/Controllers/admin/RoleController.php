<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.role-permission.role.index',compact('permissions'));
    }

    public function show()
    {
        $data = Role::query(); // Use query for DataTable integration

        return DataTables::of($data)
            ->editColumn('created_at', function ($d) {
                return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
            })
            ->editColumn('updated_at', function ($d) {
                return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
            })
            ->addColumn('actions', function ($d) {
                return view('admin.role-permission.role.action_buttons', compact('d')); // Create a separate view for buttons
            })
            ->make(true);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:roles,name'
            ]
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permission);

        return response()->json([
            'success' => true,
            'message' => 'Role Created Successfully',
            'data' => $role
        ]);
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
