<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk', 'model', 'tahun', 'harga_beli', 'deskripsi', 'start_booking', 'finish_booking'
    ];
}
