<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class RentalRequest extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'rentvehicles';
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

 


    public function setCarphotoAttribute($value){
        $attribute_name="carphoto";
        $disk="public";
        $destination_path="uploadimages";
        $filename=mt_rand(10000,99999).'.jpg';
        $this->uploadFileToDisk($value,$attribute_name,$disk,$destination_path,$filename);
    }

    public function setBluebookphotoAttribute($value){
        $attribute_name="bluebookphoto";
        $disk="public";
        $destination_path="uploadimages";
        $filename=mt_rand(10000,99999).'.jpg';
        $this->uploadFileToDisk($value,$attribute_name,$disk,$destination_path,$filename);
    }
}