<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';
    protected $primaryKey = 'id_inscripciones';
    public $timestamps = false;
}
