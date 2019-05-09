<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\User;
use App\Menu;
class AdminUserController extends Controller
{
    public function index(){


        $users=User::Paginate(20);
        view()->share('users',$users);
        //view()->share('contacts', $contacts);
        $user=auth()->user();
        $a=$user->type;


        $menus=Menu::all()->where('type',$a);
        view()->share('menus', $menus);





        return view('admin/user_list');
    }

    public function destroy($id) {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect('user_list')->with('success', true);

    }
}
