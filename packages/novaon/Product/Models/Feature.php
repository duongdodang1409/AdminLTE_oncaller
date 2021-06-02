<?php

namespace Novaon\Product\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Feature extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'features';
    protected $fillable = [
        'id',
        'name',
        'primary',
        'feature_pack_id',
        'status',
    ];
    protected $primaryKey = 'id';


}
