<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Menuitem;
use App\Models\Menuitemcategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('deleted', 0)->orderBy('name', 'ASC')->get();
        $menuitemcategorys = Menuitemcategory::where('deleted', 0)
                        ->where('status', 'active')
                        ->orderBy('name', 'ASC')->get();

        $passdata=array('menus'=>$menus,'menuitemcategorys'=>$menuitemcategorys); 

        return view('admin.menu.index', compact('passdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menuitems = Menuitem::where('deleted', 0)
                        ->where('status', 'active')
                        ->orderBy('name', 'ASC')->get();

        $menuitemcategorys = Menuitemcategory::where('deleted', 0)
                        ->where('status', 'active')
                        ->orderBy('name', 'ASC')->get();

        $dropdowndata=array('menuitems'=>$menuitems,'menuitemcategorys'=>$menuitemcategorys);     

        return view('admin.menu.create',compact('dropdowndata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'menuitemcategoryname'=>'required',
            'menuitemname'=>'required',
            'price'=>'required'

        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $imageName);

        $menu = new Menu();
        $menu->name = $request->name;
        $menu->menuitemcategoryid = explode('_',$request->menuitemcategoryname)[0];
        $menu->menuitemcategoryname = explode('_',$request->menuitemcategoryname)[1];
        $menu->menuitemid = explode('_',$request->menuitemname)[0];
        $menu->menuitemname = explode('_',$request->menuitemname)[1];
        $menu->desc = $request->desc;
        $menu->image = $imageName;
        $menu->price = $request->price;
        $menu->status = $request->status;
        $menu->ispopular = $request->ispopular;
        $menu->save();

        return redirect('/menu')->with('message', 'Menu Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($menu)
    {
        $menu = Menu::find($menu);
        $menuitems = Menuitem::where('deleted', 0)
                        ->where('status', 'active')
                        ->orderBy('name', 'ASC')->get();

        $menuitemcategorys = Menuitemcategory::where('deleted', 0)
                        ->where('status', 'active')
                        ->orderBy('name', 'ASC')->get();

        return view('admin.menu.edit',compact('menu','menuitems','menuitemcategorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menu)
    {
        $input=$request->all();

        $menu=Menu::find($menu);

        $menu->name=$input['name'];
        $menu->menuitemcategoryid=explode('_',$input['menuitemcategoryname'])[0];
        $menu->menuitemcategoryname=explode('_',$input['menuitemcategoryname'])[1];
        $menu->menuitemid=explode('_',$input['menuitemname'])[0];
        $menu->menuitemname=explode('_',$input['menuitemname'])[1];
        
        $menu->desc=$input['desc'];
        $menu->price=$input['price'];
        $menu->status=$input['status'];
        $menu->ispopular=$input['ispopular'];
        
        if(isset($input['image'])){
            $imageName = time().'.'.$input['image']->extension();  
            $input['image']->move(public_path('uploads'), $imageName);
            $menu->image=$imageName;
        }
        $menu->update();

        return redirect('/menu')->with('message', 'Menu Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::where('id', $id)->delete();
        return redirect('/menu')->with('message', 'Menu Deleted Successfully!');
    }
}
