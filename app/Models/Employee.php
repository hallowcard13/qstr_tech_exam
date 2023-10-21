<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    use HasFactory;

    public function factory(): BelongsTo
    {
        return $this->belongsTo(Factory::class);
    }

    protected static function booted(): void
    {
        static::updated(function (Employee $employee) {
            Log::channel('single')->info('updated an employee with id {employeeid} by user with id {userid}', ['userid' => Auth::id(), 'employeeid' => $employee->id, 'previous data' => $employee->original, 'new data' => $employee->changes]);
        });
    }
}
