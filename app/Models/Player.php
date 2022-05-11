<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = ['full_name', 'age', 'goals_count', 'assists_count', 'nationality', 'description', 'position', 'img', 'likes_count', 'team_id'];
}