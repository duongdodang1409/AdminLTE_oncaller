<?php

namespace Novaon\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'actived',
        'remember_token',
    ];
    protected $primaryKey = 'id';


}
