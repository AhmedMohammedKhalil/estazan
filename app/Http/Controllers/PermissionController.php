<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $replyedpermissions = auth('teacher')->user()->repliedpermissions;
        $newpermissions = auth('teacher')->user()->newpermissions;
        return view('teachers.permissions.index',compact('replyedpermissions','newpermissions'));

    }

    /**
     * Display a listing of the resource.
     */
    public function allPermissions()
    {
        $replyedpermissions = Permission::where('status','!=','0')->get();
        $newpermissions = Permission::where('status','0')->get();
        return view('admins.permissions.index',compact('replyedpermissions','newpermissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.permissions.create');
    }


    /**
     * Display the specified resource.
     */
    public function adminShowPermission(Request $request)
    {
        $permission = Permission::whereId($request->id)->first();
        return view('admins.permissions.show',compact('permission'));
    }


    /**
     * Display the specified resource.
     */
    public function teacherShowPermission(Request $request)
    {
        $permission = Permission::whereId($request->id)->first();
        return view('teachers.permissions.show',compact('permission'));
    }



    /**
     * Display the specified resource.
     */
    public function acceptPermission(Request $request)
    {
        $permission = Permission::whereId($request->id)->first();
        $permission->status = '1';
        $permission->replyed_at = now();
        $permission->save();
        return redirect()->route('admin.permissions.index');

    }


    /**
     * Display the specified resource.
     */
    public function rejectPermission(Request $request)
    {
        $permission = Permission::whereId($request->id)->first();
        $permission->status = '2';
        $permission->replyed_at = now();
        $permission->save();
        return redirect()->route('admin.permissions.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('teachers.permissions.edit',['permission_id' => $request->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $permission = Permission::whereId($request->id)->first();
        $permission->delete();
        return redirect()->route('teacher.permissions.index');

    }
}
