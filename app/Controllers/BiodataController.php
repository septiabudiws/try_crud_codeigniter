<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BiodataModel;
use CodeIgniter\HTTP\ResponseInterface;

class BiodataController extends BaseController
{
    public function index()
    {
        return view('biodata/tambah_biodata');
    }
}
