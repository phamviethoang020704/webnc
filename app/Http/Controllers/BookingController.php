<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\CarController;
use App\Http\Requests\Booking\StoreBookingRequest;
use App\Models\Car;
use Illuminate\Support\Carbon;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($car_id,$price_per_day)
    {
        $car = Car::findOrFail($car_id); // Tìm thông tin xe từ cơ sở dữ liệu
        return view('booking.add_book',compact('car','price_per_day'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
    $start_date = Carbon::parse($request->start_date);
    $end_date = Carbon::parse($request->end_date);
    $days = $start_date->diffInDays($end_date);

    // Tính tổng giá tiền
    $total_price = $days * $request->price_per_day;

    // Tạo bản ghi booking
    $booking = new Booking();
    $booking->fill($request->all()); // Lấy các trường từ request
    $booking->total_price = $total_price; // Thêm giá trị tính toán
    $booking->save();

    // Chuyển hướng
    return redirect()->back()->with('success', 'Đặt xe thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('booking.edit_booking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Tìm booking theo ID
    $booking = Booking::find($id);
    if (!$booking) {
        return redirect()->route('booking.index')->withErrors('Không tìm thấy đơn hàng!');
    }

    $start_date = Carbon::parse($request->start_date);
    $end_date = Carbon::parse($request->end_date);
    $days = $start_date->diffInDays($end_date);

    // Tính tổng giá tiền
    $total_price = $days * $request->price_per_day;

    $data = $request->only(['user_id','car_id','start_date', 'end_date']);
    $booking->total_price = $total_price;

    // Cập nhật dữ liệu
    $booking->update($data);
    $booking->save();

    // Chuyển hướng về danh sách booking
    return redirect('/dashboard');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->back();
    }
}
