<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Car;
use DB;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.car_id');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        $review = new Review();
        $booking = Booking::where('user_id', auth()->id())
                      ->where('car_id', $request->car_id)
                      ->first();

    if (!$booking || !$booking->browsing_status) {
        return redirect()->back()->with('error', 'Chỉ cho phép bình luận khi đơn đặt xe đã được duyệt.');
    }

    // Kiểm tra nếu người dùng đã bình luận trước đó
    $existingReview = Review::where('user_id', auth()->id())
                            ->where('car_id', $request->car_id)
                            ->first();

    // Nếu người dùng đã bình luận trước đó, trả về thông báo lỗi
    if ($existingReview) {
        return redirect()->back()->with('error', 'Bạn chỉ có thể bình luận một lần cho mỗi chiếc xe.');
    }
        Review::create([
            'car_id' => $request->car_id,
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Tính rating trung bình
        $averageRating = Review::where('car_id', $id)->avg('rating');

        // Trả về view car/car_id.blade.php
        return view("car.car_id", compact('averageRating', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
