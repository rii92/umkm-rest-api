<?php

namespace App\Models;

use CodeIgniter\Model;

class TblSupervisi extends Model
{
    protected $table            = 'tbl_supervisi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ["id", "kunjungan_ke","tanggal","kelurahan","kd_sls","rt","rw","pcl","pml","jam_mulai","jam_selesai","target_sls","sls_selesai","kk_selesai_awas","usaha_selesai_awas","foto","latitude","longtitude","cek_koordinasi","cek_laporan","cek_penelusuran_wilayah","cek_pml_pendamping","cek_guna_bangunan","cek_tagging","cek_telusur","permasalahan","solusi","user_ids","waktusubmit"];

    // Dates
    protected $useTimestamps = false;
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
}
