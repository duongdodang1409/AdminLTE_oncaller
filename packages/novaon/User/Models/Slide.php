<?php

namespace Novaon\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Slide extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'slides';
    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'status',
    ];
    protected $primaryKey = 'id';


}
