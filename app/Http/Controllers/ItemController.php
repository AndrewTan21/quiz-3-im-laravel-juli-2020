<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index() {
        return view('index');
    }

    public function store() {
        $project = DB::table('projects')->where('id', $id)->first();
        return view('store', compact('project'));
    }

    public function create() {
        return view('create');
    }
}
