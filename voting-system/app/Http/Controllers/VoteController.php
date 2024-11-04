<?php

namespace App\Http\Controllers;

use App\Models\PoliticalParty;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public $votes = '';

    public function __construct(Vote $vote)
    {
        $this->votes = $vote;
    }


    public function index(){

        $votes = Vote::with(['candidate','voter'])->get();

        return view('content.votes', compact('votes'));
    }

    public function parties(){

        try {

            $parties = PoliticalParty::all();

            return view('content.parties', compact('parties'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }
}
