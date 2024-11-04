<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->table = 'uploads';

        $this->fillable = ['name','path'];

        $this->hidden = ['created_at','updated_at'];

        parent::__construct($attributes);
    }


    public static function uploadPhoto($request = null, $object = null){

        $file = $request->file('image');

        $destination = 'assets/img/uploads';

        $file->move($destination,$file->getClientOriginalName());

        $upload = Uploads::create([
            'path' => $destination,
            'name' => $file->getClientOriginalName(),
        ]);

        $object->upload_id = $upload->id;

        $object->save();

    }
}
