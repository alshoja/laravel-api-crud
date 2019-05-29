<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Validator;


class UsersController extends Controller
{
/**
     * Login using credentials.
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();

            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['type']= $user->type;
            $success['id']= $user->id;
            return response()->json(['success' => $success], 200);
        }
        else {
            return response()->json(['error' => 'Invalid Username or Password '], 401);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = User::all();
       return response()->json($user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'type' => 'required',

       ]);

       if($validator->fails()) {
           return response()->json(['error' => $validator->errors()],401);
       }

       $input = $request->all();
       $input['password'] = bcrypt($input['password']);
       $user = User::create($input);
       $success['token'] = $user->createToken('MyApp')->accessToken;
       $success['name'] = $user->name;
       $success['id']= $user->id;
       return response()->json($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findorfail($id);
        return response()->json($user,200);
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
        $data = User::findorfail($id);
        $data->name = $request->name;
        $data->type = $request->type;
        $data->save();
        return response()->json($data,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id',$id)->firstorfail();
        $user->delete();
        return response()->json($user);
    }


}
