<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class TblSupervisiController extends ResourceController {
    protected $modelName='App\Models\TblSupervisi';
    protected $format='json';

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index() {
        try {
            //code...
            $data=[ 'message'=>'success',
            'data_supervisi'=>$this->model->findAll(),
            ];

            return $this->respond($data, 200);
        }

        catch (\Throwable $th) {
            // Mengembalikan pesan kesalahan dari pengecualian
            $errorMessage=$th->getMessage();

            $data=[ 'message'=>'error',
            'error_message'=>$errorMessage,
            ];

            return $this->respond($data, 500);
        }
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id=null) {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new() {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create() {

        try {
            //code...
            $this->model->insert([ 
                "kunjungan_ke"=> esc($this->request->getVar('kunjungan_ke')),
                "tanggal"=> esc($this->request->getVar('tanggal')),
                "kelurahan"=> esc($this->request->getVar('kelurahan')),
                "kd_sls"=> esc($this->request->getVar('kd_sls')),
                "rt"=> esc($this->request->getVar('rt')),
                "rw"=> esc($this->request->getVar('rw')),
                "pcl"=> esc($this->request->getVar('pcl')),
                "pml"=> esc($this->request->getVar('pml')),
                "jam_mulai"=> esc($this->request->getVar('jam_mulai')),
                "jam_selesai"=> esc($this->request->getVar('jam_selesai')),
                "target_sls"=> esc($this->request->getVar('target_sls')),
                "sls_selesai"=> esc($this->request->getVar('sls_selesai')),
                "kk_selesai_awas"=> esc($this->request->getVar('kk_selesai_awas')),
                "usaha_selesai_awas"=> esc($this->request->getVar('usaha_selesai_awas')),
                "foto"=> esc($this->request->getVar('foto')),
                "latitude"=> esc($this->request->getVar('latitude')),
                "longtitude"=> esc($this->request->getVar('longtitude')),
                "cek_koordinasi"=> esc($this->request->getVar('cek_koordinasi')),
                "cek_backup"=> esc($this->request->getVar('cek_backup')),
                "cek_penelusuran_wilayah"=> esc($this->request->getVar('cek_penelusuran_wilayah')),
                "cek_pml_pendamping"=> esc($this->request->getVar('cek_pml_pendamping')),
                "cek_guna_bangunan"=> esc($this->request->getVar('cek_guna_bangunan')),
                "cek_tagging"=> esc($this->request->getVar('cek_tagging')),
                "cek_telusur"=> esc($this->request->getVar('cek_telusur')),
                "permasalahan"=> esc($this->request->getVar('permasalahan')),
                "solusi"=> esc($this->request->getVar('solusi')),
                "user_ids"=> esc($this->request->getVar('user_ids')),
                "waktusubmit"=> esc($this->request->getVar('waktusubmit')),
                "bangunan_kemarin"=> esc($this->request->getVar('bangunan_kemarin')),
                "bangunan_hari_ini"=> esc($this->request->getVar('bangunan_hari_ini')),
                "bangunan_total"=> esc($this->request->getVar('bangunan_total')),
                "pengecekkan_hp"=> esc($this->request->getVar('pengecekkan_hp')),
                "ground_check"=> esc($this->request->getVar('ground_check')),
                ]);
    
            $response = [
                "message" => "Data Supervisi Berhasil Ditambahkan"
            ];
    
            return $this->respondCreated($response);
        } catch (\Throwable $th) {
            //throw $th;
            // Mengembalikan pesan kesalahan dari pengecualian
            $errorMessage=$th->getMessage();

            $data=[ 'message'=>'error',
            'error_message'=>$errorMessage,
            ];

            return $this->respond($data, 500);
        }

        
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id=null) {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id=null) {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id=null) {
        //
    }
}