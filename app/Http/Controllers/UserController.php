<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Crypt;
use Session;
class UserController extends Controller
{
    function registersubmit(Request $req){

            $User = new Users ;
            $User->name = $req->name;
            $User->email = $req->email;
            $User->password =Crypt::encrypt($req->password);
            $User->save();

            return redirect('login');

    }


    function userlist (Request $req){

        $Users = Users::all();
        return view('userlist' , compact('Users'));

    }



    function loginsubmit (Request $req){


        $Users=Users::where (['email'=>$req->email])->get();
        if(Crypt::decrypt($Users[0]->password)==$req->password)
        {
            $req->Session()->put('Users',$Users[0]->name);
            return redirect('userlist');
        } 
        else{
            return redirect('register');
        }
    }
}
