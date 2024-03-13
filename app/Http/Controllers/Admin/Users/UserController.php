<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users=User::orderBy('id')->get();
        return view('admin.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validate  = Validator::make($request->all(),[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
        ],[
            'fname.required' => 'Firstname is required',
            'lname.required' => 'Lastname is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',


        ]);

        if($validate->fails()){
            return response()->json(['failes'=>$validate->errors()->all()]);
        }


            $users=new User();
            $users->first_name=$request->fname;
            $users->last_name=$request->lname;
            $users->email=$request->email;
            $users->phone=$request->phone;
            $users->password=Hash::make($request->phone);
            $users->save();
            return response()->json(['status' => 'success']);

    }

    public function view($id){
        $user = User::find($id);
        return view('admin.users.view',compact('user'));
    }

    public function update(Request $request){
        $update = User::find($request->id);
        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->push();

        if($update)
        {
            toast('Successfully updated user','success','top-right');
            return redirect()->back();
        }
    }


    public function updatePassword(Request $request){
        $update = User::find($request->id);
        $validate = Validator::make($request->all(), [
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validate->fails()) {
            toast($validate->errors()->all(),'info');
            return back();
        }
        $update->password = Hash::make($request->password);
        $update->push();

        if($update) {
            toast('Successfully updated password', 'success', 'top-right');
            return redirect()->back();
        }
    }











}
