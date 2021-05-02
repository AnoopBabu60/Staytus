<?php

namespace App\Http\Controllers;

use App\Models\Menuitem;
use Illuminate\Http\Request;

class MenuitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuitems = Menuitem::where('deleted', 0)->orderBy('name', 'ASC')->get();
        return view('admin.menuitem.index', compact('menuitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menuitem.create');
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
        ]);

        $menuitem = new Menuitem();
        $menuitem->name = $request->name;
        $menuitem->status = $request->status;
        $menuitem->save();

        return redirect('/menu-item')->with('message', 'Menu Item Added Successfully!');
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
    public function edit($menuitem)
    {
        $menuitems = Menuitem::find($menuitem);
        return view('admin.menuitem.edit',compact('menuitems'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menuitem)
    {
        
        $this->validate($request, [
            'name' => 'required',
        ]);

        $input=$request->all();
        $menuitem=Menuitem::find($menuitem);
        $menuitem->name=$input['name'];
        $menuitem->status=$input['status'];
        $menuitem->update();

        return redirect('/menu-item')->with('message', 'Menu Item Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menuitem::where('id', $id)->delete();
        return redirect('/menu-item')->with('message', 'Menu Item Deleted Successfully!');
    }
}
