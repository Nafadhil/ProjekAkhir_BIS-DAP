<?php

namespace App\Controllers;

use App\Models\UmkmDataModel;

class Home extends BaseController
{
    protected $umkmdataModel;
    public function __construct()
    {
        $this->umkmdataModel = new UmkmDataModel();
    }
    public function index()
    {
        $umkmdata = $this->umkmdataModel->findAll();
        $jumlah_baris = $this->umkmdataModel->countAll(); // Menghitung jumlah baris pada tabel

        // Menghitung jumlah kolom kategori berisi 'makanan'
        $jumlah_makanan = $this->umkmdataModel->where('kategori', 'makanan')->countAllResults();
        $jumlah_non_makanan = $this->umkmdataModel->where('kategori', 'non makanan')->countAllResults();
        $jumlah_per_kecamatan = $this->umkmdataModel->select('COUNT(id) AS jumlah, kecamatan')
            ->groupBy('kecamatan')
            ->findAll();

        $jumlah_makanan_nonmakanan = $this->umkmdataModel->
            select('SUM(CASE WHEN kategori = "makanan" THEN 1 ELSE 0 END) AS jumlah_makanan,
                    SUM(CASE WHEN kategori = "non makanan" THEN 1 ELSE 0 END) AS jumlah_non_makanan')
            ->find();

        $data = [
            'tittle' => "Dashboard | SI-IDA",
            'umkmdata' => $umkmdata,
            'jumlah' => $jumlah_baris,
            'jumlah_makanan' => $jumlah_makanan,
            'jumlah_non_makanan' => $jumlah_non_makanan,
            'jumlah_per_kecamatan' => $jumlah_per_kecamatan,
            'jumlah_makanan_nonmakanan' => $jumlah_makanan_nonmakanan,
        ];

        return view('home', $data);
    }
}