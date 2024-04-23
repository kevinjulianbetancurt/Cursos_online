<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructores extends Model
{
    use HasFactory;
    protected $table = 'instructores';
    protected $primaryKey = 'id_instructores';
    public $timestamps = false;
}
