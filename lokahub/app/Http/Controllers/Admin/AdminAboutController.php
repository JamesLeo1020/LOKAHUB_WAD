<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AdminAboutController extends Controller
{
    // Constructor without middleware
    // Remove the middleware if you are not using authentication
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|nullable|max:10240',  // max 10MB for the image
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('about-images');
        }

        About::create($validated);
        return redirect()->route('admin.about.index')->with('success', 'About berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|nullable|max:10240',  // max 10MB for the image
        ]);

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($about->image) {
                Storage::delete($about->image);
            }
            $validated['image'] = $request->file('image')->store('about-images');
        }

        $about->update($validated);
        return redirect()->route('admin.about.index')->with('success', 'About berhasil diupdate!');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        // Delete image if exists
        if ($about->image) {
            Storage::delete($about->image);
        }
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About berhasil dihapus!');
    }

    // Function for printing all abouts
    public function print()
    {
        $abouts = About::all();
        return view('admin.about.print', compact('abouts'));
    }
}
