<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Register;
use App\Libraries\Globallibrary;
use DB;

class UserController extends Controller
{
    public function userRegister(Request $Request)
    {
        $validator = Validator::make($Request->all(), [
            'name' => 'required|string|between:2,100',
            'number' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        else
        {
        $Reg = new Register();
        $Reg->name = $Request['name'];
        $Reg->number = $Request['number'];
        $Reg->email = $Request['email'];
        $Reg->password = $Request['password'];
        $Reg->save();
        $users = DB::select('select * from register');
        return view('login');
        }
    }
    public function userView()
    {
        $users = Register::all();
        return view('view',['users'=>$users]);
    }
    public function userUpdate(Request $Request,$id)
    {
        $users = Register::find($id);
        return view('update',['users'=>$users]);
    }
    public function userUpdateFinal(Request $Request,$id)
    {
        $name = $Request->input('name');
        $number = $Request->input('number');
        $email = $Request->input('email');
        $password = $Request->input('password');
        DB::update('update register set name = ?, number = ?, email = ?, password = ? where id = ?',[$name,$number,$email,$password,$id]);
        echo "Record updated successfully";
    }
    public function userDelete($id)
    {
        DB::delete('delete from register where id = ?',[$id]);
        echo "Record deleted successfully";
    }
}
