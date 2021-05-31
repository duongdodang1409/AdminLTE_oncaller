<?php

namespace Novaon\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Setting extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'settings';
    protected $fillable = [
        'id',
        'logo_images',
        'slide_images',
        'web_title',
    ];
    protected $primaryKey = 'id';


}
