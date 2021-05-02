<?php

namespace App\Http\Controllers;

use App\Models\Menuitemcategory;
use Illuminate\Http\Request;

class MenuitemcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuitemcategorys = Menuitemcategory::where('deleted', 0)->orderBy('name', 'ASC')->get();
        return view('admin.menuitemcategory.index', compact('menuitemcategorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menuitemcategory.create');
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
        ]);


        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads'), $imageName);

        $menuitemcategory = new Menuitemcategory();
        $menuitemcategory->name = $request->name;
        $menuitemcategory->punchline = $request->punchline;
        $menuitemcategory->desc = $request->desc;
        $menuitemcategory->image = $imageName;
        $menuitemcategory->status = $request->status;
        $menuitemcategory->save();

        return redirect('/menu-item-category')->with('message', 'Menu Item Category Added Successfully!');
 
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
    public function edit($menuitemcategory)
    {
        $menuitemcategory = Menuitemcategory::find($menuitemcategory);
        return view('admin.menuitemcategory.edit',compact('menuitemcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Menuitemcategory)
    {

        $input=$request->all();

        $menuitemcategory=Menuitemcategory::find($Menuitemcategory);
        $menuitemcategory->name=$input['name'];
        $menuitemcategory->status=$input['status'];
        $menuitemcategory->punchline=$input['punchline'];
        $menuitemcategory->desc=$input['desc'];
        if(isset($input['image'])){
            $imageName = time().'.'.$input['image']->extension();  
            $input['image']->move(public_path('uploads'), $imageName);
            $menuitemcategory->image=$imageName;
        }
        $menuitemcategory->update();

        return redirect('/menu-item-category')->with('message', 'Menu Item Category Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Menuitemcategory::where('id', $id)->delete();
        return redirect('/menu-item-category')->with('message', 'Menu Item Category Deleted Successfully!');
    }
}
