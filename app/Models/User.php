<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_name',
        'password',
        'avatar',
        'full_name',
        'phone',
        'address',
        'verify_code',
        'role',
        'status',
        'remember_token',
    ];
    public $timestamps = true;

    public function role_user() {
        return $this->belongsTo('App\Models\Role_user', 'id', 'role_id');
    }

    public function shops() {
        return $this->hasOne('App\Models\Shops', 'account_id', 'id');
    }

}
