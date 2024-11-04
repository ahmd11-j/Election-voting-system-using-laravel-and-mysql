<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate extends Model
{
    use HasFactory, SoftDeletes;

    public function __construct(array $attributes = [])
    {
        $this->table = "candidates";

        $this->fillable = ['first_name','last_name','cnic_no','date_of_birth','party_id','area_of_election_id','upload_id'];

        $this->hidden = ['updated_at', 'created_at','deleted_at'];

        parent::__construct($attributes);
    }

    public function party(){

        return $this->belongsTo(PoliticalParty::class,'party_id','id');
    }

    public function area(){

        return $this->belongsTo(AreaOfElection::class,'area_of_election_id','id');
    }

    public function upload(){

        return $this->belongsTo(Uploads::class,'upload_id', 'id');
    }

    public function votes(){

        return $this->hasMany(Vote::class,'candidate_id','id');
    }

    public static function storeCandidate($request = null){

        return self::create($request);
    }

    public static function updateCandidate($request = null, $id = null){

        self::whereId($id)->update($request);
    }
}
