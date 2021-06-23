<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmnasabah extends Model
{
    use HasFactory;

    protected $table = 'tmnasabah';
    public $incrementing = false;
    public $datetime = false;
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
