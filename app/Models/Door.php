<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['open', 'closed', 'access', 'interval', 'user'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['open' => 'datetime', 'access' => 'boolean', 'closed' => 'datetime', 'interval' => 'string', 'user' => 'string'];
}
