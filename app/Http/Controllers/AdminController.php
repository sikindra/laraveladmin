<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(Request $request)
    {
       if($request->session()->has('ADMIN_LOGIN')){
               

            return redirect('admin/dashboard');
        }else{
              $request->session()->flash('error','Access Denied');
              return view('admin.login');
          }
    }
    public function auth(Request $request){
        
        $email=$request->post('email');
         $password=$request->post('password');
         
         

         $result=Admin::where(['email'=>$email])->first();
         if($result){
             if(Hash::check($request->post('password'),$result->password)){
                $request->session()->put('ADMIN_LOGIN',true);
                $request->session()->put('ADMIN_ID',$result->id);
                $request->session()->put('ADMIN_NAME',$result->name);
                $request->session()->put('ADMIN_EMAIL',$result->email);
                $request->session()->put('ADMIN_IMAGE',$result->image);
               
                

                return redirect('admin/dashboard');

             }else{
                $request->session()->flash('error','please enter valid password details');
                return redirect('admin');

             }
             
             
            

         }else{
             $request->session()->flash('error','please enter valid login details');
             return redirect('admin');
         }
    }
    public function dashboard(){
        return view("admin/dashboard");
    }
    public function edit_profile(){
        $admin_id= session()->get('ADMIN_ID');
        $result['admins']=DB::table('admins')  
            ->where(['id'=>$admin_id])
            ->get();
        
        
        return view("admin/edit_profile",$result);
    }

    public function update_profile(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $image = $request->image;
        
      
             
      
      
      
      if($request->hasfile('image'))
        {  $destination = 'assets/images/admin/'.$request->image;
          if(File::exists($destination))
          {
              File::delete($destination);
          }
          $file = $request->file('image');
          $filename = $file->getClientOriginalName();
          $file ->move('assets/images/admin/',$filename);
          $request->image = $filename;        
          $update = DB::update('update admins set image =? where id =?',[$request->image,$id]);
             $notification = array(
                'message' => 'Successfully Employee get  Data',
                'alert-type' => 'success'
          );
        }
      else {
          echo "error";
          $notification = array(
              'message' => 'Error get mode Data',
              'alert-type' => 'error'
          );
      }

      $update = DB::update('update admins set name = ?,email = ? where id =?',[$name,$email,$id]);
      return redirect()->back()->with('message',' update Successfully');
    }
    public function change_password(Request $request)
    {
        $id = session()->get('ADMIN_ID');
        $password = Hash::make($request->confirm_password);

      $update = DB::update('update admins set password = ? where id =?',[$password,$id]);
      return redirect()->back()->with('message',' update Successfully');
    }
}
