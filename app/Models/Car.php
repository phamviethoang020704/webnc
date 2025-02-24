<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Booking;
use App\Models\CarImage;
class Car extends Model
{
    use HasFactory;
    protected $fillable = ['description','trademark','name','seat_count','price_per_day','quantity','image_url','remaining_quantity'];
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    public function carImages(){
        return $this->hasMany(CarImage::class);
    }
}
