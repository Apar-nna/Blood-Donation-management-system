<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodbanks extends Model
{
    use HasFactory;
    protected $table='Bloodbanks';
    protected $primarykey='$id';
    protected $fillable=['name','blood','date','quantity'];
}
