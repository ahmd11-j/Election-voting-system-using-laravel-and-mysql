<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $candidates = \App\Models\Candidate::with(['upload','area'])->get();

    return view('home', compact('candidates'));
});

Route::post('/login_user', [UserController::class, 'loginUser']);
Route::post('/cast_vote', [UserController::class, 'castVote']);

Route::get('/results', function (){

    $candidates = \App\Models\Candidate::withCount('votes')->with('party','area','upload')->get();

    return view('content.result', compact('candidates'));
});

Route::post('/login_admin', function (){

    $email = request()->input('email');
    $password = request()->input('password');

    if (!empty($email) && !empty($password)){

        if ($email === 'admin@admin.com'){

            if ($password === '12345678'){

                \Illuminate\Support\Facades\Session::put(['auth' => true]);

                return redirect('/dashboard');
            }
        }

    }

    return response()->json(['errors' => 'Wrong Credentials'], 401);

});

Route::group(['middleware' => ['admin_auth']], function (){

Route::get('/dashboard', function (){

    $casted_voter = \App\Models\Vote::count();
    $registered_voter = \App\Models\Voter::count();
    $parties = \App\Models\PoliticalParty::get();
    $candidates_count = \App\Models\Candidate::count();

    $candidates = \App\Models\Candidate::get();

    return view('content.home', compact('casted_voter','registered_voter',
        'parties','candidates_count', 'candidates'));
});

Route::get('/candidates', [\App\Http\Controllers\CandidateController::class,'candidates']);

Route::get('/create_candidate', [\App\Http\Controllers\CandidateController::class,'create']);

Route::post('/store_candidate', [\App\Http\Controllers\CandidateController::class,'store']);

Route::get('/edit_candidate/{id}', [\App\Http\Controllers\CandidateController::class,'edit']);

Route::post('/update_candidate', [\App\Http\Controllers\CandidateController::class,'update']);

Route::get('/delete_candidate/{id}', [\App\Http\Controllers\CandidateController::class,'delete']);

Route::get('/voters', [\App\Http\Controllers\CandidateController::class,'voters']);

Route::get('/create_voter', [\App\Http\Controllers\CandidateController::class,'createVoter']);

Route::post('/store_voter', [\App\Http\Controllers\CandidateController::class,'storeVoter']);

Route::get('/edit_voter/{id}', [\App\Http\Controllers\CandidateController::class,'editVoter']);

Route::post('/update_voter', [\App\Http\Controllers\CandidateController::class,'updateVoter']);

Route::get('/delete_voter/{id}', [\App\Http\Controllers\CandidateController::class,'deleteVoter']);

Route::get('/votes', [\App\Http\Controllers\VoteController::class,'index']);

Route::get('/parties', [\App\Http\Controllers\VoteController::class,'parties']);

Route::get('/area_of_election', function (){

    $area_of_elections = \App\Models\AreaOfElection::allElectionalArea();

    return view('content.area_of_election', compact('area_of_elections'));
});

Route::post('/store_party', function (){

    \App\Models\PoliticalParty::create(['name' => request()->input('party_name')]);

    return redirect('/parties');

});

Route::post('/store_area_of_election', function (){

    \App\Models\AreaOfElection::create(['area_type' => request()->input('area_type')

        , 'area_no' => request()->input('area_no')]);

    return redirect('/area_of_election');

});

Route::get('/logout_admin', function (){

    \Illuminate\Support\Facades\Session::flush();

    return redirect('/');

});

});

