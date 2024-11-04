<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfElection extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->table = 'area_of_election';

        $this->fillable = ['area_no','area_type'];

        $this->hidden = ['created_at','updated_at','deleted_at'];

        parent::__construct($attributes);
    }

    public static function allElectionalArea(){

        return self::orderBy('area_no')->get();
    }
}
