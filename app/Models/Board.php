<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // protected $table = '바꾸고 싶은 테이블명';
    // protected $primaryKey = 'i_board'; 바꾸고 싶은 pk
    protected $fillable = ['title', 'ctnt', 'hits'];
    protected $guarded = ['created_at'];
}
