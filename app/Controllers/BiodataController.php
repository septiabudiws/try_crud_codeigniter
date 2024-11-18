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

        //session();
        
        $data = [
            'jurusan' => $jurusan,
            'validation' => \Config\Services::validation()
        ];

        return view('biodata/tambah_biodata', $data);
    }

    public function save(){

        //validasi input
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
                ],
            'nim' => [
                'rules' => 'required|is_unique[biodata.nim]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => 'nim sudah terdaftar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);

            return redirect()->to('/tambah')->withInput()->with('validation', $validation);
        }

        
        $fileFoto = $this->request->getFile('foto');

        // Periksa apakah ada file yang diupload
        if ($fileFoto->isValid() && !$fileFoto->hasMoved()) {
            
            $namaFoto = $fileFoto->getRandomName();
            
            $fileFoto->move('foto', $namaFoto);
        } else {
            $namaFoto = 'default.jpg';
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

    public function hapus($id){
        $this->biodataModel->delete($id);

        return redirect()->to('/');
    }

    public function edit($id){
        $jurusan = $this->jurusanModel->findAll();

        //session();
        
        $data = [
            'jurusan' => $jurusan,
            'validation' => \Config\Services::validation(),
            'biodata' => $this->biodataModel->getDetailBiodataWithJurusan($id)
        ];

        return view('biodata/edit_biodata', $data);
    }

    public function update($id)
{
    // Validasi input
    if (!$this->validate([
        'nama' => 'required',
        'nim' => [
            'rules' => "required|is_unique[biodata.nim,id,{$id}]",
            'errors' => [
                'required' => 'NIM harus diisi.',
                'is_unique' => 'NIM sudah terdaftar.',
            ],
        ],
        'jurusan' => 'required',
        'foto' => [
            'rules' => 'is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'errors' => [
                'is_image' => 'File yang diupload harus berupa gambar.',
                'mime_in' => 'File yang diupload harus dalam format jpg, jpeg, atau png.',
            ],
        ],
    ])) {
        return redirect()->to("/biodata/edit/$id")->withInput()->with('validation', \Config\Services::validation());
    }

    // Ambil data biodata berdasarkan ID
    $biodataLama = $this->biodataModel->find($id);

    // Handle upload foto baru
    $fileFoto = $this->request->getFile('foto');
    if ($fileFoto->isValid() && !$fileFoto->hasMoved()) {
        // Generate nama baru untuk file
        $namaFotoBaru = $fileFoto->getRandomName();
        // Pindahkan file ke folder 'foto'
        $fileFoto->move('foto', $namaFotoBaru);

        // Hapus foto lama jika bukan default
        if ($biodataLama['foto'] !== 'default.jpg') {
            unlink('foto/' . $biodataLama['foto']);
        }
    } else {
        // Jika tidak ada foto baru, gunakan foto lama
        $namaFotoBaru = $biodataLama['foto'];
    }

    // Update data ke database
    $this->biodataModel->update($id, [
        'nama' => $this->request->getVar('nama'),
        'nim' => $this->request->getVar('nim'),
        'id_jurusan' => $this->request->getVar('jurusan'),
        'alamat' => $this->request->getVar('alamat'),
        'no_telpon' => $this->request->getVar('telpon'),
        'foto' => $namaFotoBaru,
    ]);
    
    return redirect()->to('/');
}

}
