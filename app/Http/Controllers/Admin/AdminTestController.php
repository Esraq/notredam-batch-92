<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTestController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        $a = $user->type;
        //echo $a;

         if($a=="neutral"){

             //echo "true";
             return redirect('admin/test');
         }
         else
         {

             echo "unauthorzedd access";
         }


    }
}
