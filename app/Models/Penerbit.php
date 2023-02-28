<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penerbit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
