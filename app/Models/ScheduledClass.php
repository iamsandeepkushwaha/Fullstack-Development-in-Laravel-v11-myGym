<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduledClass extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the instructor that owns the ScheduledClasses.
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
    
    /**
     * Get the scheduledclasses that owns the ClassType.
     */
    public function classType(): BelongsTo
    {
        return $this->belongsTo(ClassType::class);
    }
}
