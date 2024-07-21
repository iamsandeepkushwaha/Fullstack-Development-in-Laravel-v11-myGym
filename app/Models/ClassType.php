<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassType extends Model
{
    use HasFactory;
    
    /**
     * Get the scheduledclasses for the ClassType.
     */
    public function scheduledClasses(): HasMany
    {
        return $this->hasMany(ScheduledClass::class);
    }
}
