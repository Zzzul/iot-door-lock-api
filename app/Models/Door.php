<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['open', 'closed', 'interval'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = ['open' => 'datetime', 'closed' => 'datetime', 'interval' => 'string', 'created_at' => 'datetime', 'updated_at' => 'datetime'];


}
