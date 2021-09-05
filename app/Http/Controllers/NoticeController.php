<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    

        /**
    
         * Display a listing of the resource.
    
         *
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function index()
    
        {
    
            $notices = Notice::latest()->paginate(5);
    
        
    
            return view('admin.notices.index',compact('notices'))
    
                ->with('i', (request()->input('page', 1) - 1) * 5);
    
        }
    
       
    
        /**
    
         * Show the form for creating a new resource.
    
         *
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function create()
    
        {
    
            return view('admin.notices.create');
    
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
    
                'name' => 'required',
    
                'detail' => 'required',
    
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
    
      
    
            $input = $request->all();
    
      
    
            if ($image = $request->file('image')) {
    
                $destinationPath = 'image/';
    
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    
                $image->move($destinationPath, $profileImage);
    
                $input['image'] = "$profileImage";
    
            }
    
        
    
            Notice::create($input);
    
         
    
            return redirect()->route('notices.index')
    
                            ->with('success','Notice created successfully.');
    
        }
    
         
    
        /**
    
         * Display the specified resource.
    
         *
    
         * @param  \App\Notice  $Notice
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function show(Notice $notice)
    
        {
    
            return view('admin.notices.show',compact('notice'));
    
        }
    
         
    
        /**
    
         * Show the form for editing the specified resource.
    
         *
    
         * @param  \App\Notice  $Notice
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function edit(Notice $notice)
    
        {
    
            return view('admin.notices.edit',compact('notice'));
    
        }
    
        
    
        /**
    
         * Update the specified resource in storage.
    
         *
    
         * @param  \Illuminate\Http\Request  $request
    
         * @param  \App\Notice  $Notice
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function update(Request $request, Notice $notice)
    
        {
    
            $request->validate([
    
                'name' => 'required',
    
                'detail' => 'required'
    
            ]);
    
      
    
            $input = $request->all();
    
      
    
            if ($image = $request->file('image')) {
    
                $destinationPath = 'image/';
    
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    
                $image->move($destinationPath, $profileImage);
    
                $input['image'] = "$profileImage";
    
            }else{
    
                unset($input['image']);
    
            }
    
              
    
            $notice->update($input);
    
        
    
            return redirect()->route('notices.index')
    
                            ->with('success','Notice updated successfully');
    
        }
    
      
    
        /**
    
         * Remove the specified resource from storage.
    
         *
    
         * @param  \App\Notice  $Notice
    
         * @return \Illuminate\Http\Response
    
         */
    
        public function destroy(Notice $notice)
    
        {
    
            $notice->delete();
    
         
    
            return redirect()->route('notices.index')
    
                            ->with('success','Notice deleted successfully');
    
        }
    
    }

