<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voter extends Model
{
    use HasFactory, SoftDeletes;

    public function __construct(array $attributes = [])
    {
        $this->table = 'voters';

        $this->fillable = ['first_name','last_name','cnic_no','upload_id'];

        $this->hidden = ['created_at','updated_at','deleted_at'];

        parent::__construct($attributes);
    }

    public static function createVoter($request = null){

        return self::create($request);
    }

    public static function updateVoter($request = null, $id = null){

        self::whereId($id)->update($request);
    }
}
