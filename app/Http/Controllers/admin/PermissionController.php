<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.role-permission.permission.index');
    }
 
    public function show()
{
    $data = Permission::query(); // Use query for DataTable integration

    return DataTables::of($data)
        ->editColumn('created_at', function($d) {
            return $d->created_at ? $d->created_at->format('M d, Y h:i A') : '';
        })
        ->editColumn('updated_at', function($d) {
            return $d->updated_at ? $d->updated_at->format('M d, Y h:i A') : '';
        })
        ->addColumn('actions', function ($d) {
            return view('admin.role-permission.permission.action_buttons', compact('d')); // Create a separate view for buttons
        })
        ->make(true);
}
 
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:permissions,name'
            ]
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
    
        $permission = Permission::create(['name' => $request->name]);
    
        return response()->json([
            'success' => true,
            'message' => 'Permission Created Successfully',
            'data' => $permission
        ]);
    }
    
    
    public function edit(Permission $permission)
    {
        return response()->json(['data' => $permission]);

    }

    public function update(Request $request,Permission $permission)
    {
  

        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
                'unique:permissions,name,'.$permission->id
            ]
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
    
        $permission->update(['name' => $request->name]);
    
        return response()->json([
            'success' => true,
            'message' => 'Permission Updated',
            'data' => $permission
        ]);
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
    
        return response()->json([
            'success' => true,
            'message' => 'Permission Deleted Successfully',
        ]);

    }
}


