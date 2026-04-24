<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostModelController extends Controller
{
    public function index() {
        return PostModel::all();
    }

    public function show($id) {
        return PostModel::find($id);
    }

    public function add(Request $request)
    {
        $request->validate(['title' => 'required|string', 'body' =>'required|string']);
        $title = $request['title'];
        $body = $request['body'];
        PostModel::create(['title' => $title, 'body' => $body]);
        return redirect('/api/index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string',
            'body' =>'required|string']);
        $id = $request['id'];
        $title = $request['title'];
        $body = $request['body'];
        PostModel::find($id)->update(['title' => $title, 'body' => $body]);
        return redirect('/api/index');
    }

    public function delete(Request $request)
    {
        $id = $request['id'];
        PostModel::destroy($id);
        return redirect('/api/index');
    }
}
