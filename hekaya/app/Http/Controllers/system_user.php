<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;
use App\User;
use Hash;
use Session;
class system_user extends Controller
{
    public function index()
    {
        
        return view('Pages.system_user.system_user');
    }
    public function readall()  //list all stores
    {
        $users =   DB::table('users')
            ->select('id', 'name', 'email', 'password', 'remember_token', 'created_at', 'updated_at',DB::raw("
  (CASE WHEN (role = 1) THEN 'Admin' WHEN (role=2) THEN 'Reception' Else 'Doctor' END) as role , (CASE WHEN (active =1 ) THEN 'active' ELSE 'Disactive' END ) as active"))->get();
       echo "{\"data\":" .json_encode($users). "}";
    } 
      public function insert(Request $request)
    { 
     $this->validate($request, [
      'email' => 'required|string|email|max:255|unique:users',
      'password'  => 'required|alphaNum|min:3',
      'name'=>'required',
      'role'=>'required'
     ]);
        
       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'active'=>'0',
            'role'=> $request->role
        ]);
     return redirect()->back();
    }
    public function delete($id)
    {

    DB::table('users')->where('id', '=', $id)->delete();

    return redirect()->back();
    }
      public function edit(Request $request)
    {
        $updated_at= date('Y-m-d H:i:s'); 
        $id=$_POST['Eid'];
        $name=$_POST['Ename'];
        $password=$_POST['Epassword'];
        $role=$_POST['Erole'];
        $email=$_POST['Eemail'];
        if($password== Session::get('system_userpass'))
        {
        $id = DB::table('users')->where('id', $id)
       ->update(
        [ 
            'updated_at'=>$updated_at,
            'name'=>$name,
            'role'=>$role,
            'email'=>$email
           
        ]
       );
        }
        else
        {
             $id = DB::table('users')->where('id', $id)
       ->update(
        [ 
            'updated_at'=>$updated_at,
            'name'=>$name,
            'password'=>Hash::make($password),
            'role'=>$role,
            'email'=>$email
           
        ]
       );
        }
        
    return redirect()->back();
    }
    
     public function active_user($id) //active user
    {
        $updated_at= date('Y-m-d H:i:s'); 
        DB::table('users')
        ->where('id', $id)
        ->update(['active' =>1, 
        'updated_at'=>$updated_at]);
        return redirect()->back();

    }
      public function disactive_user($id) //disactive user
    {
        $updated_at= date('Y-m-d H:i:s'); 
        DB::table('users')
        ->where('id', $id)
        ->update(['active' =>0, 
        'updated_at'=>$updated_at]);
        return redirect()->back();

    }
      public function getsystem_user ($id) // to show customer details
    {
        $users = DB::table('users')->where('id','=',$id)->get(); 
         Session::put('system_userpass', $users[0]->password);  

        echo "{\"data\":" .json_encode($users). "}";
    }
    public function readuserss()
    {
        
       $customers=DB::table('users')->select('email')->get();
       echo json_encode ($customers);
    }
    
}
