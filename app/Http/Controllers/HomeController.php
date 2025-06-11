<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        // For dashboard listing all event data
        $contents = Home::all();
        return view('dashboard.index', compact('contents'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'penyanyi' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Home::create([
            'name' => $request->name,
            'penyanyi' => $request->penyanyi,
            'date' => $request->date,
            'location' => $request->location,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Home $dashboard)
    {
        return view('dashboard.edit', ['homePageContent' => $dashboard]);
    }

    public function update(Request $request, Home $dashboard)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'penyanyi' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $dashboard->name = $request->name;
        $dashboard->penyanyi = $request->penyanyi;
        $dashboard->date = $request->date;
        $dashboard->location = $request->location;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($dashboard->image_path && Storage::disk('public')->exists($dashboard->image_path)) {
                Storage::disk('public')->delete($dashboard->image_path);
            }

            $dashboard->image_path = $request->file('image')->store('images', 'public');
        }

        $dashboard->save();

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Home $dashboard)
    {
        if ($dashboard->image_path && Storage::disk('public')->exists($dashboard->image_path)) {
            Storage::disk('public')->delete($dashboard->image_path);
        }

        $dashboard->delete();

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus!');
    }

       public function tampilHome()
   {
       $contents = Home::all(); // Ambil semua data dari tabel home_page_contents
       return view('home', compact('contents')); // Kirim variabel contents ke view
   }
   
}
