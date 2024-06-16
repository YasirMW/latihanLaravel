<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tambahData extends Model
{
    public function tambahData($data)
    {
        return DB::table('siswa')->insert($data);
    }
    public function getData()
    {
        return DB::table('siswa')->get();
    }
    public function editData()
    {
        $nis = $_GET['id'];
        return DB::table('siswa')->where('nis', $nis)->get();
    }
    public function updateData()
    {
        $nis = $_GET['id'];
        return DB::table('siswa')->update($data);
    }
}
