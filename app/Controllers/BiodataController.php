<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataModel;
use App\Models\JurusanModel;
use CodeIgniter\HTTP\ResponseInterface;

class BiodataController extends BaseController
{
    protected $biodataModel;
    protected $jurusanModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();

        $this->jurusanModel = new JurusanModel();
    }
    public function index(){
        $jurusan = $this->jurusanModel->findAll();

        $data = [
            'jurusan' => $jurusan
        ];
        return view('biodata/tambah_biodata', $data);
    }

    public function save(){

        
    $fileFoto = $this->request->getFile('foto');

    // Periksa apakah ada file yang diupload
    if ($fileFoto->isValid() && !$fileFoto->hasMoved()) {
        
        $namaFoto = $fileFoto->getRandomName();
        
        $fileFoto->move('foto', $namaFoto);
    } else {
        $namaFoto = 'default.jpg'; // Jika tidak ada foto, gunakan default
    }
        // $this->request->getVar();
        $this->biodataModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'alamat' => $this->request->getVar('alamat'),
            'no_telpon' => $this->request->getVar('telpon'),
            'id_jurusan' => $this->request->getVar('jurusan'),
            'foto' => $namaFoto
        ]);

        return redirect()->to('/');
    }
}
