<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class PoliticalParty extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->table = "political_parties";

        $this->fillable = ['name'];

        $this->hidden = ['created_at','deleted_at'];

        parent::__construct($attributes);
    }

    public static function allParties(){

        return self::get();
    }
}
