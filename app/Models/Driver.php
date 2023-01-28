<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'driversignup';
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
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "uploadimages";
        $fileName = mt_rand(1111111,9999999) . '.jpg';

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
 

  

    public function setLicenceAttribute($value)
    {
        $attribute_name = "licence";
        $disk = "public";
        $destination_path = "licence";
        $fileName = mt_rand(111111,999999) . '.jpg';
        
        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName);
        
    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
    


}