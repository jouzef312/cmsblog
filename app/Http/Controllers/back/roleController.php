<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class roleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $roles = Role::All();
          $permissions = Permission::All();
        return view('back.role.index',compact('roles','permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permission = Permission::All();
             return view('back.role.create',compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
     $this->validate($request,[
            'name'=>'required',
          
            
            ]);
     $role = new Role();
     $role->name = $request->name;
     $role->save();
     $role->givePermissionTo($request->permission);
      $roles = Role::All();
        return view('back.role.index',compact('roles'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $permissions = Permission::All();
        $role = Role::findById($id);
        return view('back.role.edit'  ,compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
             $this->validate($request,[
            'name'=>'required',
            'permission'=>'required'
            
            ]);
     $role = Role::findById($id);
     $role->name = $request->name;
     $role->save();
     $role->givePermissionTo($request->permission);
      $roles = Role::All();
        return view('back.role.index',compact('roles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
