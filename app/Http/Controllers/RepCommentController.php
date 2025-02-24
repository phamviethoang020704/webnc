<?php

namespace App\Http\Controllers;

use App\Models\RepComment;
use Illuminate\Http\Request;

class RepCommentController extends Controller
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
        'review_id' => 'required|exists:reviews,id',
        'content' => 'required|string|max:255',
    ]);

    // Kiểm tra quyền hạn
    if (auth()->user()->role !== 'admin') {
        return redirect()->back()->with('error', 'Bạn không có quyền thực hiện hành động này.');
    }

    // Lưu phản hồi
    RepComment::create([
        'review_id' => $request->review_id,
        'user_id' => auth()->id(), // Lưu user_id của admin đang đăng nhập
        'content' => $request->content,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Phản hồi đã được gửi.');
}


    /**
     * Display the specified resource.
     */
    public function show(RepComment $repComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RepComment $repComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RepComment $repComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RepComment $repComment)
    {
        //
    }
}
