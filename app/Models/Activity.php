<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'type',
        'recurrence',
        'priority',
        'status',
        'due_date',
        'completed_at',
        'progress',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function checkIns()
    {
        return $this->hasMany(CheckIn::class);
    }

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }
}
