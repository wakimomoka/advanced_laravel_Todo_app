<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        $form = $request->all();
        TodoList::create($form);

        return redirect('/');
    }
}
