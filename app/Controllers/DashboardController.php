<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BiodataModel;

class DashboardController extends BaseController
{
    protected $biodataModel;

    public function __construct()
    {
        $this->biodataModel = new BiodataModel();
    }
    public function index()
    {
        $biodata = $this->biodataModel->getBiodataWithJurusan();

        $data = [
            'biodata' => $biodata,
        ];
        return view('dashboard', $data);
    }

    public function detail($id){

        $biodata = $this->biodataModel->getDetailBiodataWithJurusan($id);
        // dd($biodata, $jurusan);

        $data = [
            'biodata' => $biodata,
        ];

        //cek komik
        if (empty($data['biodata'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Dengan id' . $id . 'Tidak Ditemukan');
        }

        return view('detail', $data);
    }
}
