<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leaderInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'follow_team_num',
        'observ_team_num',
    ];
    public function Note()
    {
        return $this->hasMany('App\Models\Note','leader_id');
    }
}
