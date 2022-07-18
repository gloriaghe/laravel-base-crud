<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{

    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
