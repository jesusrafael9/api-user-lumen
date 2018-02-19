<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Validator;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function manage()
    {

        return view('manage');

    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response to json
     */

    public function index(Request $request)
    {
        if($request->isJson())
        {
            $users  = User::all();
            return response()->json($users,200);
        }
        return response()->json(['error' => 'Unauthorized'],401);

    }

    /**
     * Store and Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response to json
     */
    
    public function store(Request $request,$update = 0)
    {   
        $rs =  (is_object(json_decode($request->rs)))? get_object_vars(json_decode($request->rs)) : false;
        if($request->hasFile('image') && is_array($rs))
        {
            $rules = [
                'name'      => 'required',
                'email'  => 'required|email|unique:users',
                'image'  => 'required|image|mimes:jpg,png'
            ];
            $rs['image'] = $request->file('image');
            if ($update==1)
            {
                $status = 200;    
                $user  = User::find($rs['id']);
                $rules = [
                    'name'      => 'required',
                    'email'  => 'required|email',
                    'image'  => 'required|image|mimes:jpg,png'
                ];
                if(empty($user))
                {
                    return response()->json([
                    'search' => false,
                    'errors'  => 'Not found result'
                    ],401);
                        
                }

            } else {
                $status = 201;
                $user = new User;
            }
            try
            {
                $validator = Validator::make($rs, $rules);
                if($validator->fails())
                {
                    return response()->json([
                    'method' => $request->getMethod(),
                    'errors'  => $validator->errors()->all()
                    ],401);
                }
                $file = $request->file('image'); 
                $filename = microtime() . "-" . $file->getClientOriginalName();
                $request->file('image')->move("photos/",$filename);
                $user->name = $rs['name'];
                $user->email = $rs['email'];
                $user->image = $filename;

                $user->save();
                return response()->json($user,$status);
            }
            catch (Exception $e)
            {
                \Log::info('Error creating or updating user: '.$user);
            }
        }
        return response()->json(['error' => 'Unauthorized'],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response to json
     */

    public function show(Request $request, $id)
    {
        if($request->isJson())
        {
                $user  = User::find($id);
                if(empty($user))
                {
                    return response()->json([
                    'search' => false,
                    'errors'  => 'Not found result'
                    ],401);
                        
                }
                return response()->json($user,200);    
        }
        return response()->json(['error' => 'Unauthorized'],401);
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response to json
     */

    public function destroy(Request $request, $id)
    {
        if($request->isJson())
        {
                $user  = User::find($id);
                if(empty($user))
                {
                    return response()->json([
                    'search' => false,
                    'errors'  => 'Not found result'
                    ],401);
                        
                }
                $user->delete();

                \Log::info('Delete user: '.$user);
                return response()->json([
                    'status' => 'delete',
                    'userID' => $user['id'] 
                    ],200);    
        }
        return response()->json(['error' => 'Unauthorized'],401);
    }
}