<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Team;

class Score extends Model
{
    use HasFactory;

    protected $table = 'matchs';

    protected $fillable = [
        'match_date',
        'local_team_id',
        'local_goal',
        'visit_team_id',
        'visit_goal',
    ];

    public function localTeam() {
        return $this->belongsTo(Team::class, 'local_team_id', 'id');
    }

    public function visitTeam() {
        return $this->belongsTo(Team::class, 'visit_team_id', 'id');
    }

}
