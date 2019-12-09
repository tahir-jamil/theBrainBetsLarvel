<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Predictions;
use App\Nations;
use App\Champions;
use App\Sports;
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

    public function post_matches(Request $request)
    {
        $matches = Matches::create($request->all());

        return response()->json($matches, 201);
    }

    public function post_predictions(Request $request)
    {
        $predictions = Predictions::create($request->all());

        return response()->json($predictions, 201);
    }

    // public function post_matches(Request $request)
    // {

    //     // create new task
    //     $rows = $request->input('rows');
    //     foreach ($rows as $row)
    //     {
    //         $charges[] = [
    //             'course_id' => $request->input('Facture_id'),
    //             'Title' => $row['Title'],
    //             'Quantity' => $row['Quantity'],
    //             'Price' => $row['Price'],
    //         ];
    //     }

    //     Charge::insert($Charges);
    //     return response()->json("your records are successfully inserted", 201);
    // }

    public function update_predictions(Request $request)
    {
        $prediction = Predictions::findOrFail($request->input('id'));
        $prediction->update($request->all());

        return response()->json($prediction, 200);
    }

    // public function delete($id)
    // {
    //     Author::findOrFail($id)->delete();
    //     return response('Deleted Successfully', 200);
    // }
}