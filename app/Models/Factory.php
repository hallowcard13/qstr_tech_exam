<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\FactoryModelFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factory extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return FactoryModelFactory::new();
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
