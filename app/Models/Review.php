<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Car;
use App\Models\RepComment;
class Review extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','car_id','rating','comment'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function repComments(){
        return $this->hasMany(RepComment::class);
    }
}
