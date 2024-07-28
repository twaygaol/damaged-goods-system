<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->nik;
        // dd($user);

        return view('pages.masyarakat.index', ['liat' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'image' => 'nullable|image|max:2048', // Mengubah validasi gambar sesuai kode kedua
        ]);

        $nik = Auth::user()->nik;
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        $data = $request->all();
        $data['user_nik'] = $nik;
        $data['user_id'] = $id;
        $data['name'] = $name;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $imageName);
            \Log::info('Image path: ' . $path); // Tambahkan ini untuk debugging
            $data['image'] = $imageName;
        }

        Alert::success('Berhasil', 'Pengaduan terkirim');
        Pengaduan::create($data);

        return redirect('user/pengaduan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function lihat()
    {


        $items = Auth::user()->pengaduan()->orderBy('created_at', 'DESC')->get();

        $tanggapan = [];
        foreach ($items as $item) {
            $tanggapan[$item->id] = Tanggapan::where('pengaduan_id', $item->id)->latest()->first();
        }

        return view('pages.masyarakat.detail', [
            'items' => $items,
            'tanggapan' => $tanggapan
        ]);
    }

    public function show($id)
    {
        $item = Pengaduan::with(['details', 'user'])->findOrFail($id);
    
        // Mengambil tanggapan terakhir
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->latest()->first();
    
        return view('pages.masyarakat.show', [
            'item' => $item,
            'tanggapan' => $tanggapan // Perhatikan bahwa nama variabel ini adalah 'tanggapan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::find($id);
        $user->delete();

        Alert::success('Berhasil', 'data telah di hapus');
        return redirect('admin/masyarakat');


    }
}
