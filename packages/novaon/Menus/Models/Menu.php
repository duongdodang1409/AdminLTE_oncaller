<?php

namespace Novaon\Menus\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'menus';
    protected $fillable = [
        'id',
        'name',
        'level',
        'parent_id',
        'slug',
        'status'
    ];
    protected $primaryKey = 'id';


}
