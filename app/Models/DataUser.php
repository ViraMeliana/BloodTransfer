<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $table = 'userdata';
    public $timestamps = false; 
 //protected $fillable = ['USER_USERNAME','USER_PASSWORD','USER_NAME','USER_EMAIL','BIRTH_DATE','AGE','USER_PHONE','USER_ADDRESS','NIK','USER_BLOODTYPES','PHOTO'];
}
