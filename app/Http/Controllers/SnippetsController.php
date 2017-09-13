<?php

namespace App\Http\Controllers;

use App\Snippet;

class SnippetsController extends Controller
{
    public function index()
    {
    	return view('snippets.index');
    }

    public function create()
    {
    	return view('snippets.create');
    }

    public function show(Snippet $snippet)
    {
    	return view('snippets.show', compact('snippet'));
    }

    public function store()
    {

    }
}








