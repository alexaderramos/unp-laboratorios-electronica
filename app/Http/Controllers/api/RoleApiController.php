<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleApiController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
       $role = Role::all(['id','name','description']);
       return  response()->json($role,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request,$id)
    {

        $role = Role::with('permissions:id,name,description')
            ->where('id',$id)
            ->select('roles.id','roles.name','roles.description')
            ->firstOrFail();
        /*$role = Role::select(['id','name','description'])->where('id',$id)->firstOrFail();
        $role->permissions=$role->permissions()->get(['name','id','description']);*/
        return response()->json($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Role $role)
    {
        $role->name = $request->get('name');
        $role->description = $request->get('description');
        $role->update();
        return $this->successResponse($role,200,"Rol actualizado.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return  $this->successResponse('',200,"Rol eliminado");
    }
}
