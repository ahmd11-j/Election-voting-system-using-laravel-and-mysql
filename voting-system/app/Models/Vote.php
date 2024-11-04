<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->table = 'votes';

        $this->fillable = ['voter_id','candidate_id'];

        $this->hidden = ['created_at','updated_at'];

        parent::__construct($attributes);
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class,'candidate_id','id');
    }

    public function voter(){
        return $this->belongsTo(Voter::class,'voter_id','id');
    }

    public static function addVote($request = null){

        self::create($request);
    }

}
