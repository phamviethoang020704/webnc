<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Review;
class RepComment extends Model
{
    use HasFactory;
    protected $fillable = ['review_id','user_id','content'];
    public function review(){
        return $this->belongsTo(Review::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
