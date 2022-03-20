<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
    ];

    public function leaderInformation()
    {
        return $this->belongsTo('App\Models\leaderInformation','leader_id');
    }
    public function Week()
    {
        return $this->belongsTo('App\Models\Week','week_id');
    }
    
}
