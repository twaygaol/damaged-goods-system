<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use RealRashid\SweetAlert\Facades\Alert;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil daftar pengaduan dengan urutan berdasarkan tanggal pembuatan
        $items = Pengaduan::orderBy('created_at', 'DESC')->get();
        
        // Mengambil data tanggapan untuk setiap pengaduan
        $tanggapan = [];
        foreach ($items as $item) {
            $tanggapan[$item->id] = Tanggapan::where('pengaduan_id', $item->id)->latest()->first();
        }

        return view('pages.admin.pengaduan.index', [
            'items' => $items,
            'tanggapan' => $tanggapan // Mengirim data tanggapan ke tampilan
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengaduan::with(['details', 'user'])->findOrFail($id);
    
        // Mengambil tanggapan terakhir
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->latest()->first();
    
        return view('pages.admin.pengaduan.detail', [
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
        // Validasi input
        $request->validate([
            'status' => 'required', // Sesuaikan dengan aturan validasi yang diperlukan
            'tanggapan' => 'required_if:status,Selesai', // Tanggapan wajib diisi jika status Selesai
            //Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);
    
        // Dapatkan data pengaduan yang akan diperbarui
        $pengaduan = Pengaduan::findOrFail($id);
    
        // Lakukan pembaruan status pengaduan
        $pengaduan->update([
            'status' => $request->status,
            //Tambahkan kolom lain yang ingin diperbarui sesuai kebutuhan
        ]);
    
        // Jika status pengaduan adalah "Selesai", simpan tanggapan
        if ($request->status == 'Selesai') {
            Tanggapan::create([
                'pengaduan_id' => $id,
                'tanggapan' => $request->tanggapan,
                //Tambahkan kolom lain yang ingin disimpan dalam tanggapan sesuai kebutuhan
            ]);
        }
    
        // Redirect kembali ke halaman detail pengaduan dengan membawa data terbaru
        return redirect()->route('pengaduans.show', $id)->with('success', 'Pengaduan berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        Alert::success('Berhasil', 'Pengaduan telah di hapus');
        return redirect('admin/pengaduans');
    }
}
