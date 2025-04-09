<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CheckIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_id',
        'checked_at',
        'note'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
