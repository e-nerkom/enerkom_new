<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class AdminContentController extends Controller
{
    public function index()
    {
    	$content = Content::all();
        return view('admin.content_caption',compact('content'));
    }

    public function edit($id)
    {
    	$data = Content::findOrFail($id);
        return view('admin.content_edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
    	$data = Content::findOrFail($id);      
        $input = $request->all();
        
        $this->validate($request, [
            'value'=>'required',
        ]);        
        $data->value = $input['value'];
        $data->save();

        return redirect('admin/content')->with('status', 'Data berhasil diperbarui.');
    }



}
