<?php

namespace App\Http\Controllers;

use App\Models\Covid;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covids = Covid::all();
        return view('admin.index',compact('covids'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'districts' => 'required',
            'positive' => 'required',
            'death' => 'required',
        ]);
  
        Covid::create($request->all());
   
        return redirect()->route('admin.covid')
                        ->with('success','Detail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    // public function show(Covid $covid)
    // {
    //     return view('admin.show',compact('covid'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Covid $covid)
    {
        
        return view('admin.edit',compact('covid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covid $covid)
    {
        $request->validate([
            
        ]);
  
        $covid->update($request->all());
  
        return redirect()->route('admin.covid')
                        ->with('success','Details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid $covid, $id)
    {
        $covid = Covid::find($id);
        $covid->delete();
  
        return redirect()->route('admin.covid')
                        ->with('success','Detail deleted successfully');
    }

    // public function user()
    // {
    //     $users = Covid::all();
    //     return view('admin.user',compact('users'))
    //     ->with('i', (request()->input('page', 1) - 1) * 5);
            
    // }
}
