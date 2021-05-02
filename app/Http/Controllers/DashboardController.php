<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menu;
use App\Models\Menuitem;
use App\Models\Menuitemcategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {


    	$Count_menuitemcategory = Menuitemcategory::where('deleted', 0)->count();
    	$Count_menuitem = Menuitem::where('deleted', 0)->count();
    	$Count_menu = Menu::where('deleted', 0)->count();

    	
        return view('dashboard',compact('Count_menuitemcategory','Count_menuitem','Count_menu'));
    }
}
