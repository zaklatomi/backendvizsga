<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    /** @use HasFactory<\Database\Factories\TemaFactory> */
    use HasFactory;

    protected $fillable = ['temanev'];

    public function szo()
    {
        return $this->belongsTo(Szo::class);
    }
}
