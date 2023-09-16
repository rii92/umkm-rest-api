<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class TblUserController extends ResourceController {
    protected $modelName='App\Models\TblUser';
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
            'data_user'=>$this->model->findAll(),
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

    public function login() {
        try {
            //code...
            $email = esc($this->request->getVar('email'));
            $password = esc($this->request->getVar('password'));

            // Cari pengguna berdasarkan email
            $user = $this->model->where('email', $email)->first();

            if($user) {
                if($password == $user["password"]) {
                    $data=[ 'message'=>'success',
                    'data_user'=>$user,
                    ];

                    return $this->respond($data, 200);
                }
            }

            else {
                $data=[ 'message'=>'user tidak ditemukan',
                ];

                return $this->respond($data, 500);
            }
        }

        catch (\Throwable $th) {
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
        //
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