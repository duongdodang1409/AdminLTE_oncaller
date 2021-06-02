<?php

namespace Novaon\Product\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class FeaturePack extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'feature_packs';
    protected $fillable = [
        'id',
        'title',
        'price',
        'price_sale',
        'status'
    ];
    protected $primaryKey = 'id';


}
