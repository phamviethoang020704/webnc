<?php

namespace App\Http\Controllers;

use App\Models\CarImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
class CarImageController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'car_id' => 'required|exists:cars,id',
        'image_url' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $car = Car::findOrFail($request->car_id);
    $carImage = new CarImage();

    if ($request->hasFile('image_url')) {
        $file = $request->file('image_url');

        // Lấy tên xe và chuẩn hóa thành slug (loại bỏ dấu và khoảng trắng)
        $carNameSlug = Str::slug($car->name);

        // Đặt tên file theo định dạng: timestamp_ten_xe.extension
        $filename = time() . '_' . $carNameSlug . '.' . $file->getClientOriginalExtension();

        // Định nghĩa đường dẫn lưu file: carImages/Ten_Xe/Ten_Xe.jpg
        $path = $file->storeAs("carImages/{$carNameSlug}", $filename, 'public');

        // Lưu đường dẫn vào database
        $carImage->car_id = $car->id;
        $carImage->image_url = $path;
    }

    $carImage->save();

    return response()->json(['message' => 'Ảnh đã được tải lên thành công!', 'path' => $path], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(CarImage $carImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarImage $carImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarImage $carImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarImage $carImage)
    {
        //
    }
}
