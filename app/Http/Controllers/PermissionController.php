<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Session;

class PermissionController extends Controller {

    public function __construct() {

        $this->middleware('permission:permission-list|permission-create|permission-edit|permission-delete', ['only' => ['index','store']]);
         $this->middleware('permission:permission-create', ['only' => ['create','store']]);
         $this->middleware('permission:permission-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:permission-delete', ['only' => ['destroy']]);
       
    }

    
    public function index() {
        $permissions = Permission::all(); //Get all permissions

        return view('permissions.index')->with('permissions', $permissions);

        
    }

    
    public function create() {
        $roles = Role::get(); //Get all roles

        return view('permissions.create')->with('roles', $roles);
    }

   
    public function store(Request $request) {
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;

        $permission->save();

        return redirect()->route('permissions.index')
                        ->with('success','Permission created successfully');

    }

    
    public function show($id) {
        return redirect('permissions');
    }

   
    public function edit($id) {
        $permission = Permission::findOrFail($id);

        return view('permissions.edit', compact('permission'));
    }

    
    public function update(Request $request, $id) {
        $permission = Permission::findOrFail($id);
        $this->validate($request, [
            'name'=>'required|max:40',
        ]);
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('permissions.index')
            ->with('flash_message',
             'Permission'. $permission->name.' updated!');

    }

    
    public function destroy($id) {
        $permission = Permission::findOrFail($id);

       
    // if ($permission->name == "Administer roles & permissions") {
    //         return redirect()->route('permissions.index')
    //         ->with('flash_message',
    //          'Cannot delete this Permission!');
    //     }

        $permission->delete();

        return redirect()->route('permissions.index')
            ->with('flash_message',
             'Permission deleted!');

    }
}