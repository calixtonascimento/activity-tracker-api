<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reminder extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'base_date',
        'days_before',
        'repeat_until',
        'time',
        'frequency'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
