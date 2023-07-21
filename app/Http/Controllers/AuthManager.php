<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthManager extends Controller
{
    public function login(){
        if(Auth::check())
        {
            return redirect(route('home'));
        }
        return view('login');
    }
    public function register(){
        return view('register');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function blog(){
        return view('blog');
    }

    public function services(){
        return view('services');
    }
    

    //Login
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials))
        {
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","Login details are not valid");

    }

    //Register

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' => 'required|email|unique:users',
            'password' =>'required'
        ]);

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user = User::create($data);
        if(!$user)
        {
            return redirect(route('register'))->with("error","Registration failed try agin.");
        }
        return redirect(route('login'))->with("success","Registration success, Login to access app");

    }

    //To insert data to About us section

    public function about_upload(Request $request)
    {
        $about_us = new about;
        $about_us->name=$request->name;
        $about_us->email=$request->email;
        $about_us->description=$request->description;
        $images = $request->file;
        if($images)
        {
            $imagename = time().'.'.$images->getClientOriginalExtension();
            $request->file->move('About',$imagename);
            $about_us->image=$imagename; 
        }
        $about_us->save();
        return redirect()->back();


    }

    //Display about us section data
    public function about_view()
    {
        $data = about::all();
        return view('display',compact('data'));
    }

    //To delete the about us section data
    public function delete($id)
    {
        $data = about::find($id);
        $data->delete();
        return redirect()->back();
    }

    //View values from database to update
    public function update_view($id)
    {
        $about_us = about::find($id);
        return view('update_page', compact('about_us'));
    }

    //To update data to the aboutus section 
    public function update(Request $request, $id)
    {
        $about_us = about::find($id);
        $about_us->name=$request->name;
        $about_us->email=$request->email;
        $about_us->description=$request->description;

        $images = $request->file;
        if($images){
            $imagename = time().'.'.$images->getClientOriginalExtension();
            $request->file->move('About',$imagename);
            $about_us->image=$imagename; 
        
        }   

        $about_us->save();
        return redirect()->back();
    }

   

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
