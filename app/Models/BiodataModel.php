<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table            = 'biodata';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'foto', 'nim', 'id_jurusan', 'no_telpon'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getBiodataWithJurusan()
    {
    return $this->db->table($this->table)
        ->select('biodata.*, jurusan.jurusan AS nama_jurusan')
        ->join('jurusan', 'biodata.id_jurusan = jurusan.id_jurusan')
        ->get()
        ->getResultArray();
    }

    public function getDetailBiodataWithJurusan($id)
{
    return $this->select('biodata.*, jurusan.jurusan AS nama_jurusan')
        ->join('jurusan', 'biodata.id_jurusan = jurusan.id_jurusan')
        ->where('biodata.id', $id)
        ->first();
}

}
