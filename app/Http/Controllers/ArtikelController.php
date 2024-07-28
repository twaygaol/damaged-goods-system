<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel; // Don't forget to import the Artikel model

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(10);
        return view('pages.admin.artikel.index', compact('artikels'));
        return view('frontend.landing', compact('artikels'));
    }

    public function create()
    {
        return view('pages.admin.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048', // Assuming image is optional and has size limit
            'date' => 'nullable|date',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $input['image'] = $imageName;
        }

        Artikel::create($input);

        return redirect()->route('pages.admin.artikel.index')->with('success', 'Artikel created successfully.');
    }

    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('pages.admin.artikel.show', compact('artikel'));
    }

    public function detail($id)
    {
        $artikel = Artikel::findOrFail($id); 
        return view('detail', compact('artikel')); 
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('pages.admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048', // Assuming image is optional and has size limit
            'date' => 'nullable|date',
        ]);

        $artikel = Artikel::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName);
            $input['image'] = $imageName;
        }

        $artikel->update($input);

        return redirect()->route('pages.admin.artikel.index')->with('success', 'Artikel updated successfully.');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('pages.admin.artikel.index')->with('success', 'Artikel deleted successfully.');
    }
}
