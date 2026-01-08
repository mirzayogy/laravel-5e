<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    protected $table = 'prodi';
    protected $guarded = [];

    public function matakuliah(): HasMany
    {
        return $this->hasMany(Matakuliah::class);
    }
}
