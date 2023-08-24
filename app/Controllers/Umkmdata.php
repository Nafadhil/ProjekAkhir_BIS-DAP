<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UmkmDataModel;
use \Dompdf\Dompdf;

class umkmdata extends BaseController
{
    protected $umkmdataModel;
    protected $session;

    public function __construct()
    {
        $this->umkmdataModel = new UmkmDataModel();
        $this->session = \Config\Services::session();
        $this->session->start();

        if (!$this->session->get('umkmdata')) {
            $this->session->set('umkmdata');
        }
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_umkmdata') ? $this->request->getVar('page_umkmdata') :
            1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            session()->set('keyword', $keyword);
            $umkm = $this->umkmdataModel->search($keyword);
        } else {
            session()->remove('keyword');
            $umkm = $this->umkmdataModel;
        }

        $data = [
            'tittle' => "UMKM Data | SI-IDA",
            'umkmdata' => $umkm->paginate(10, 'umkmdata'),
            'pager' => $this->umkmdataModel->pager,
            'keyword' => $keyword,
            'currentPage' => $currentPage
        ];

        return view('umkmdata/index', $data);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */

    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'tittle' => "Add UMKM Data | SI-IDA"
        ];

        return view('umkmdata/upload', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function save()
    {
        $photo = $this->request->getFile('fotoktp');
        $fileName = $photo->getRandomName();
        $photo->move('photos', $fileName);
        if (
            !$this->validate([
                'tanggal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Tidak boleh kosong'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Tidak boleh kosong'
                    ]
                ],
                'jns_kelamin' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelamin Tidak boleh kosong'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Tidak boleh kosong'
                    ]
                ],
                'kecamatan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kecamatan Tidak boleh kosong'
                    ]
                ],
                'kelurahan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelurahan Tidak boleh kosong'
                    ]
                ],
                'kota' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kota Tidak boleh kosong'
                    ]
                ],
                'kodepos' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode Pos Tidak boleh kosong'
                    ]
                ],
                'namausaha' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Usaha Tidak boleh kosong'
                    ]
                ],
                'produk1' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Produk 1 Tidak boleh kosong'
                    ]
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori Tidak boleh kosong'
                    ]
                ],
                'status_nib' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status NIB Tidak boleh kosong'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            "tanggal" => $this->request->getPost('tanggal'),
            "nama" => $this->request->getPost('nama'),
            "fotoktp" => $fileName,
            "jns_kelamin" => $this->request->getPost('jns_kelamin'),
            "alamat" => $this->request->getPost('alamat'),
            "kecamatan" => $this->request->getPost('kecamatan'),
            "kelurahan" => $this->request->getPost('kelurahan'),
            "kota" => $this->request->getPost('kota'),
            "kodepos" => $this->request->getPost('kodepos'),
            "namausaha" => $this->request->getPost('namausaha'),
            "produk1" => $this->request->getPost('produk1'),
            "produk2" => $this->request->getPost('produk2'),
            "produk3" => $this->request->getPost('produk3'),
            "produk4" => $this->request->getPost('produk4'),
            "kategori" => $this->request->getPost('kategori'),
            "status_nib" => $this->request->getPost('status_nib'),
            "alasan_tdk_lanjut" => $this->request->getPost('alasan_tdk_lanjut'),
            "status_akun_halal" => $this->request->getPost('status_akun_halal'),
            "status_akun_nib" => $this->request->getPost('status_akun_nib'),
        ];
        $this->umkmdataModel->insert($data);
        session()->setFlashdata('success', 'Data Berhasil diupload');
        return redirect()->to('/umkmdata');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = [
            'tittle' => "Edit UMKM Data | SI-IDA",
            'umkmdata' => $this->umkmdataModel->getUmkmData($id)
        ];
        echo view('umkmdata/edit', $data);

    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id)
    {
        $photo = $this->request->getFile('fotoktp');
        $fileName = $photo->getRandomName();
        $photo->move('photos', $fileName);
        if (
            !$this->validate([
                'tanggal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Tidak boleh kosong'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Tidak boleh kosong'
                    ]
                ],
                'jns_kelamin' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelamin Tidak boleh kosong'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Tidak boleh kosong'
                    ]
                ],
                'kecamatan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kecamatan Tidak boleh kosong'
                    ]
                ],
                'kelurahan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelurahan Tidak boleh kosong'
                    ]
                ],
                'kota' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kota Tidak boleh kosong'
                    ]
                ],
                'kodepos' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode Pos Tidak boleh kosong'
                    ]
                ],
                'namausaha' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Usaha Tidak boleh kosong'
                    ]
                ],
                'produk1' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Produk 1 Tidak boleh kosong'
                    ]
                ],
                'kategori' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kategori Tidak boleh kosong'
                    ]
                ],
                'status_nib' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Status NIB Tidak boleh kosong'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            "tanggal" => $this->request->getPost('tanggal'),
            "nama" => $this->request->getPost('nama'),
            "fotoktp" => $fileName,
            "jns_kelamin" => $this->request->getPost('jns_kelamin'),
            "alamat" => $this->request->getPost('alamat'),
            "kecamatan" => $this->request->getPost('kecamatan'),
            "kelurahan" => $this->request->getPost('kelurahan'),
            "kota" => $this->request->getPost('kota'),
            "kodepos" => $this->request->getPost('kodepos'),
            "namausaha" => $this->request->getPost('namausaha'),
            "produk1" => $this->request->getPost('produk1'),
            "produk2" => $this->request->getPost('produk2'),
            "produk3" => $this->request->getPost('produk3'),
            "produk4" => $this->request->getPost('produk4'),
            "kategori" => $this->request->getPost('kategori'),
            "status_nib" => $this->request->getPost('status_nib'),
            "alasan_tdk_lanjut" => $this->request->getPost('alasan_tdk_lanjut'),
            "status_akun_halal" => $this->request->getPost('status_akun_halal'),
            "status_akun_nib" => $this->request->getPost('status_akun_nib'),
        ];
        $this->umkmdataModel->update($id, $data);
        session()->setFlashdata('success', 'Data Berhasil diubah');
        return redirect()->to('/umkmdata');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id)
    {
        $this->umkmdataModel->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/umkmdata');
    }

    public function exportToCSV()
    {
        // Mengambil data dari model atau sumber data lainnya
        $umkm = $this->umkmdataModel->findAll();

        // Nama file CSV yang akan dihasilkan
        $filename = 'bisdata' . '.csv';

        // Membuka file CSV dan menulis data
        $file = fopen($filename, 'w');
        fputcsv(
            $file,
            array(
                'Tanggal',
                'Nama',
                'Foto KTP',
                'Kelamin',
                'Alamat',
                'Kecamatan',
                'Kelurahan',
                'Kota',
                'Kode Pos',
                'Nama Usaha',
                'Produk1',
                'Produk2',
                'Produk3',
                'Produk4',
                'Kategori',
                'Status NIB',
                'Alasan Tidak Lanjut',
                'Status Akun Halal',
                'Status Akun NIB'
            )
        ); // Menulis header kolom

        foreach ($umkm as $row) {
            fputcsv(
                $file,
                array(
                    $row['tanggal'], $row['nama'], $row['fotoktp'], $row['jns_kelamin'],
                    $row['alamat'], $row['kecamatan'], $row['kelurahan'], $row['kota'],
                    $row['kodepos'], $row['namausaha'], $row['produk1'], $row['produk2'],
                    $row['produk3'], $row['produk4'], $row['kategori'], $row['status_nib'],
                    $row['alasan_tdk_lanjut'], $row['status_akun_halal'], $row['status_akun_nib'],
                )
            ); // Menulis data
        }

        // Menutup file CSV
        fclose($file);

        // Mengirimkan file CSV sebagai respons ke browser
        return $this->response->download($filename, null)->
            setFileName($filename)->setContentType('application/csv')->setHeader('Expires', '0');
    }

    public function viewpdf()
    {
        $umkm = $this->umkmdataModel->findAll();
        $data = [
            'umkmdata' => $umkm
        ];
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('umkmdata/view', $data));
        $dompdf->setPaper('A0', 'landscape');
        $dompdf->render();

        $output = $dompdf->output();

        $response = $this->response->setHeader('Content-Type', 'application/pdf');
        $response->setBody($output);

        return $response;
    }
}