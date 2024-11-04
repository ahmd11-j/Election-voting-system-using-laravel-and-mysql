<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\Vote;
use App\Models\Voter;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public $user;

    public function __construct(User $user){

        $this->user = $user;

    }

    public function loginUser(LoginUserRequest $request){
        try{

             $voter = Voter::where('cnic_no', $request->input('cnic_number'))->first();

             $vote_exists = Vote::where('voter_id', $voter->id)->exists();

             if ($vote_exists){

                 return response()->json(['errors' => ['Your vote is already registered']], 422);
             }

             Session::put(['cnic_number' => $request->input('cnic_number')]);

             return response()->json(['message' => 'You are successfully login and now you cast yout vote']);

        }catch(\Exception $e){

            return response()->json(['error' => $e->getMessage()]);
        }
    }

    public function castVote(Request $request){

        try {

            $cnic_no = Session::get('cnic_number');

            if ($cnic_no && !empty($cnic_no)){

                $voter = Voter::where('cnic_no', $cnic_no)->first();

                if ($voter){

                    $vote_exists = Vote::where('voter_id', $voter->id)->exists();

                    if ($vote_exists){

                        Session::flush();

                        return response()->json(['errors' => [$voter->first_name . ' you already cast your vote.']], 422);
                    }

                    Vote::create([

                        'candidate_id' => $request->input('candidate_id', null),

                        'voter_id' => $voter->id

                    ]);

                    Session::flush();

                    return response()->json(['message' => 'You successfully casted your vote'], 200);
                }
            }

            return response()->json(['errors' => ['Login first to cast your vote']], 422);

        }catch (\Exception $exception){

            return response()->json(['errors' => $exception->getMessage()]);
        }
    }
}
