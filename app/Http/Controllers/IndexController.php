<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;

class IndexController extends Controller
{
    public function list()
    {
        $model = new Siswa();
        $dataSiswa = $model->getData();
        return view('listSiswa', compact('dataSiswa'));
    }

    public function edit()
    {
        $model = new Siswa();
        $dataSiswa = $model->editData();
        return view('editSiswa', compact('dataSiswa'));
    }

    public function add(Request $request)
    {
        $data = [
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'sekolah' => $request->sekolah,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
        ];
        $model = new Siswa();

        $model->tambahData($data);
        return redirect('/list')->with('successTambah', 'Data berhasil ditambahkan ke tabel');
    }
    public function update(Request $request, $nis)
{
    $record = DB::table('siswa')->where('nis', $nis)->first();
    if (!$record) {
        abort(404); // Handle case where record with $nis is not found
    }

    $data = [
        'nis' => $request->nis,
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tgl_lahir' => $request->tgl_lahir,
        'sekolah' => $request->sekolah,
        'alamat' => $request->alamat,
        'notelp' => $request->notelp,
    ];

    DB::table('siswa')->where('nis', $nis)->update($data);

    return redirect('/list')->with('successUpdate', 'Data berhasil diubah');
}


public function delete($nis)
    {
        // Find the record
        $record = Siswa::findOrFail($nis);

        // Delete the record
        $record->delete();

        // Optionally, you can return a response or redirect somewhere
        return redirect()->back()->with('success', 'Record deleted successfully.');
    }
}
