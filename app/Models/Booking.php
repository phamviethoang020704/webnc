<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Car;
use Illuminate\Support\Carbon;
class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','car_id','start_date','end_date','total_price','admin_give_back'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
    public function getCarReturnDeadlineAttribute()
    {
        if ($this->admin_give_back) {
            return 'Đã trả xe';
        }

        $endDate = Carbon::parse($this->end_date);
        $now = Carbon::now();

        if ($now->greaterThan($endDate)) {
            $daysOverdue = $now->diffInDays($endDate);
            return "Đã quá hạn $daysOverdue ngày";
        }

        return 'Chưa quá hạn';
    }
}
