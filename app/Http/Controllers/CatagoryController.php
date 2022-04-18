<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category(Request $request, $id='')
    
    {
        if($id>0){
            $arr = Catagory::where(['id' => $id])->get();
            $result['name'] = $arr[0]->name;
            $result['slug'] = $arr[0]->slug;
            $result['id'] = $arr[0]->id;
        }else{
            $result['name'] = '';
            $result['slug'] = '';
            $result['id'] = 0;
        }
        return view('admin.catagory',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_category()
    {
        $result['data'] = Catagory::all();
        return view('admin.manage_category',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function manage_catagory_process(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'slug' => 'required|unique:catagories,slug,'.$request->post('id'),  
        ]);
        
        if($request->post('id')>0){
        $catagory = Catagory::find($request->post('id'));

        }else{
            $catagory = new Catagory();
        }
        
        $catagory->name = $request->post('name');
        $catagory->slug = $request->post('slug');
        $catagory->save();
        $request->session()->flash('error','Category Added Sucessfully');
        return redirect('admin/manage_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function delete($id)

    {
        $catagory = Catagory::find($id);
        $catagory->delete();
        return redirect('admin/manage_category');
    }
}
