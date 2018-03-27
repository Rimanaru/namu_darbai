<?php

namespace App\Http\Controllers;

use App\Ordering;
use App\Attachment;
use Illuminate\Http\Request;
use Cornford\Googlmapper\Mapper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Orderings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Orderings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $post = new Ordering;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        $post->phone = $request->input('phone');
        $post->user = Auth::id();
        $post->save();
        $request->session()->flash('message', 'Užsakymas sukurtas!');
     
        if ($request->hasFile('attachments')) {
            foreach($request->attachments as $attachment)
            {
               $original_name = $attachment->getClientOriginalName();
               $path = Storage::putFile('public', $attachment);
               
               $ordering_att = new Attachment();
               $ordering_att->ordering_id=$ordering_id;
               $ordering_att->path=$path;
               $ordering_att->original_name=$original_name;
               $ordering_att->save();
            }
            return redirect(route('orderings.index'));
        }
    

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:orderings|max:250',
            'content' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect('orderings/create')
                        ->withErrors($validator)
                        ->withInput();
    }
    
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
    
}

