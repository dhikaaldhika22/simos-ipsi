<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datanur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'keterangan',
        'jumlah',
        'harga',
        'total',
    ];}
