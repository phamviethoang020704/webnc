<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Car;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $bookings = Booking::orderBy('created_at', 'desc')->get();
        $bookingBrowsing = Booking::where('browsing_status', false)->get();

        $bookingCarReturnDeadline = Booking::where('car_return_deadline',null)->get();
        $overdueBookings = $bookingCarReturnDeadline->filter(function ($booking) {
            return $booking->carReturnDeadline !== "Đã trả xe";
        });
        return view('admin.admin', compact('bookings', 'bookingBrowsing', 'overdueBookings'));
    }


    public function approveBooking($id){
        $booking = Booking::find($id);
        if(!$booking){
            return redirect()->back()->with('error','bookings khong ton tai');
        }
        if($booking->browsing_status == false){

            $car = Car::find($booking->car_id);
            if(!$car) {
                return redirect()->back()->with('error','xe khong ton tai');
            }
            if($car->remaining_quantity <= 0){
                return redirect()->back()->with('error','xe da het hang');
            }
            $car->remaining_quantity -=1;
            $car->save();

            $booking->browsing_status = true;
            $booking->save();
            return redirect()->back()->with('success','don duyet thanh cong');
        }
        return redirect()->back()->with('info','don nay da duoc duyet');

    }
    public function adminGiveBack($id){
        $booking = Booking::find($id);

        if($booking->admin_give_back == false){
            $car = Car::find($booking->car_id);
            if(!$car) {
                return redirect()->back()->with('error','xe khong ton tai');
            }
            $car->remaining_quantity +=1;
            $car->save();

            $booking->admin_give_back = true;
            $booking->save();
            return redirect()->back();
        }
        return redirect()->back();
    }

}
