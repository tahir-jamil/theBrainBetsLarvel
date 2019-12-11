<?php

namespace App\Http\Controllers;

use App\Matches;
use App\Predictions;
use App\Nations;
use App\Champions;
use App\Sports;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // search
    public function search(Request $filters) {

        $result =  DB::table('predictions')->join('matches', 'predictions.match_id', '=', 'matches.id');
        
        if ($filters->input('champion')) {
            $result->where('Champion','=', $filters->input('champion'));
        }

        if ($filters->has('sport')) {
            $result->where('Sport','=', $filters->input('sport'));
        }

        if (($filters->input('kindOfPrediction')) && ($filters->input('minQuote'))) {
            $result->where($filters->input('kindOfPrediction'),'>=', $filters->input('minQuote'));
        }

        if (($filters->input('kindOfPrediction')) && ($filters->input('maxQuote'))) {
            $result->where($filters->input('kindOfPrediction'),'<=', $filters->input('maxQuote'));
        }
        
        $result->select('predictions.*',  'matches.Champion', 'matches.Sport');

        if ($filters->input('numberOfMatches')) {
            $result->limit($filters->input('numberOfMatches'));
            return response()->json($result->get());
        } else {   
            return response()->json($result->get());
        }
       
        
      

        // // Get the results and return them.

    }

    public function get_matches() {
        // 
        return response()->json(Matches::all());
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


    // accounts

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


    public function post_sport(Request $request)
    {
        $sports = Sports::create($request->all());

        return response()->json($sports, 201);
    }

    public function post_champion(Request $request)
    {
        $champions = Champions::create($request->all());

        return response()->json($champions, 201);
    }

    public function post_nation(Request $request)
    {
        $nations = Nations::create($request->all());

        return response()->json($nations, 201);
    }


    public function update_sport(Request $request)
    {
        $prediction = Sporst::findOrFail($request->input('id'));
        $prediction->update($request->all());

        return response()->json($prediction, 200);
    }


    // prediciotns

    public function get_predictions() {
        // Matches::all()
        return response()->json(Predictions::all());
    }

    public function post_predictions(Request $request)
    {
        $predictions = Predictions::create($request->all());

        return response()->json($predictions, 201);
    }

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