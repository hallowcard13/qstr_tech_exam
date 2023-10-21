<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\FactoryModelFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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

    protected static function booted(): void
    {
        static::updated(function (Factory $factory) {
            Log::channel('single')->info('updated factory with id {factoryid} by user with id {userid}', ['userid' => Auth::id(), 'factoryid' => $factory->id, 'previousdata' => $factory->original, 'new data' => $factory->changes]);
        });
    }
}
