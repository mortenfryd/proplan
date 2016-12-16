<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Todo;
use Auth;
use Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $todos = Todo::where('user_id','=',Auth::user()->id)->get();
        return $todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $todo = new Todo(Request::all());
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return $todo;
    }
}
