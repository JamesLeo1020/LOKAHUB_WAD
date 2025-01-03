<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->file('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('images', $imageName, 'public'); // Store in public disk

        return redirect()->route('image.form')->with('success', 'Image uploaded successfully!')->with('image', $imageName);
    }

    return redirect()->route('image.form')->with('error', 'Image upload failed.');
}
    public function showForm()
{
    return view('upload'); // Create a Blade view named 'upload.blade.php'
}

public function listImages()
{
    $images = Storage::disk('public')->files('images'); // Get all files in the images directory
    return view('images', compact('images')); // Create a Blade view named 'images.blade.php'
}
}
