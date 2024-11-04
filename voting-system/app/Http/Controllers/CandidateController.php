<?php

namespace App\Http\Controllers;

use App\Models\AreaOfElection;
use App\Models\Candidate;
use App\Models\PoliticalParty;
use App\Models\Uploads;
use App\Models\Voter;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public $candidates = "";

    public function __construct(Candidate $candidate)
    {
        $this->candidates = $candidate;
    }

    public function create(){

        try {

            $parties = PoliticalParty::allParties();

            $area_of_elections = AreaOfElection::allElectionalArea();

            return view('content.create_candidate', compact('parties','area_of_elections'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }

    }

    public function store(Request $request){

        try {

            $dataArray = $request->only($this->candidates->getFillable());

            $candidate = Candidate::storeCandidate($dataArray);

            if ($request->hasFile('image')){
                Uploads::uploadPhoto($request, $candidate);
            }

            return redirect('/candidates');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function candidates(){

        try{

            $candidates = Candidate::with(['party','area'])->get();

            return view('content.candidates', compact('candidates'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function edit($id){

        try{

            $parties = PoliticalParty::allParties();

            $area_of_elections = AreaOfElection::allElectionalArea();

            $candidate = Candidate::whereId($id)->with(['party','area'])->first();

            return view('content.edit_candidate', compact('parties','area_of_elections','candidate'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function update(Request $request){

        try{

            $dataArray = $request->only($this->candidates->getFillable());

            Candidate::updateCandidate($dataArray, $request->input('id'));

            return redirect('/candidates');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function delete($id){

        try{

            Candidate::whereId($id)->delete();

            return redirect('/candidates');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }


    public function createVoter(){

        try {

            return view('content.create_voter');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }

    }

    public function storeVoter(Request $request){

        try {

            $voter = new Voter();

            $dataArray = $request->only($voter->getFillable());

            $voter = Voter::createVoter($dataArray);

            if ($request->hasFile('image')){
                Uploads::uploadPhoto($request, $voter);
            }

            return redirect('/voters');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function editVoter($id){

        try{

            $voter = Voter::whereId($id)->first();

            return view('content.edit_voter', compact('voter'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function updateVoter(Request $request){

        try{

            $voter = new Voter();

            $dataArray = $request->only($voter->getFillable());

            Voter::updateVoter($dataArray, $request->input('id'));

            return redirect('/voters');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function voters(Request $request){

        try{

            $voters = Voter::get();

            return view('content.voters', compact('voters'));

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    public function deleteVoter($id){

        try{

            Voter::whereId($id)->delete();

            return redirect('/voters');

        }catch (\Exception $exception){

            return response()->json(['error' => $exception->getMessage()]);
        }
    }

}
