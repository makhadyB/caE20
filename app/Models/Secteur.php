<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'code';
    public function vigile(){
        return $this->hasMany(Vigile::class);
    }
}
