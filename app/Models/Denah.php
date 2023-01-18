<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denah extends Model
{
    use HasFactory;
  
    // protected $fillable = [
    //     'nama','luas','kapasitas','denah','id_gedung'
    // ];
    protected $guarded = ['id'];
    public function Gedung()
    {
        return $this->belongsTo(Gedung::class);
    }
}
