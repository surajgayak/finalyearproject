<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Upcomming extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = '_upcommings';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    // public function setImageAttribute($value)
    // {
    //     $attribute_name = "image";
    //     $disk = "public";
    //     $destination_path = "uploadimages";
    //     $fileName = mt_rand(10000000,99999999). '.jpg';

    //     $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName);

    // // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    // }


    public function setImageAttribute($value){
        $attribute_name="image";
        $disk="public";
        $destination_path="upcommingimage";
        $fileName=mt_rand(1111,5555).'.jpg';
        $this->uploadFileToDisk($value,$attribute_name,$disk,$destination_path,$fileName);
    }
}