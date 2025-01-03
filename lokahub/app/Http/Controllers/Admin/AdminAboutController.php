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

    // Menampilkan seluruh About Us
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    // Menampilkan form untuk membuat About Us baru
    public function create()
    {
        return view('admin.about.create');
    }

    // Menyimpan About Us baru ke database
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

    // Menampilkan form untuk mengedit About Us
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    // Mengupdate About Us yang ada
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

    // Menghapus About Us
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

    // Fungsi untuk mencetak seluruh About Us
    public function print()
    {
        $abouts = About::all();
        return view('admin.about.print', compact('abouts'));
    }
}
