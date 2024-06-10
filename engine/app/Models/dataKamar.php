<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKamar extends Model
{
    protected $table = "dataKamar";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'noKamar', 'jenisKamar', 'harga'   ];
        
    use HasFactory;
}
