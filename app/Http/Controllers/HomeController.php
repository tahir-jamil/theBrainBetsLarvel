<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Predictions;
use App\Nations;
use App\Champions;
use App\Sports;
use App\Champions;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function get_matches() {
        // 
        return response()->json(Matches::all());
    }

    public function get_predictions() {
        // Matches::all()
        return response()->json(Predictions::all());
    }

    public function get_nations() {
        // Matches::all()
        return response()->json(Nations::all());
    }

    public function get_sports() {
        // Matches::all()
        return response()->json(Sports::all());
    }

    public function get_champions() {
        // Matches::all()
        return response()->json(Champions::all());
    }

    // public function showOneAuthor($id)
    // {
    //     return response()->json(Author::find($id));
    // }

    public function create(Request $request)
    {
        $author = Matches::create($request->all());

        return response()->json($author, 201);
    }

    // public function update($id, Request $request)
    // {
    //     $author = Author::findOrFail($id);
    //     $author->update($request->all());

    //     return response()->json($author, 200);
    // }

    // public function delete($id)
    // {
    //     Author::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}