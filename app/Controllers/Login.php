<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\View;

class Login extends BaseController
{
    protected $encrypter;
    protected $form_validation;
    protected $M_User;
    protected $session;

    //Halaman Login
    public function index()
    {
        //Data judul Halaman
        $data ['title'] = "App-PMB | Login";
        return View('v_login/index',$data);
    }

    //Pengecekan Data User
    public function cekUser()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        //Validasi
        $cek_validasi = [
            'email' => $email,
            'password' => $password
        ];

        //Cek Validasi, Jika Data Tidak Valid
        if($this->form_validation->run($cek_validasi, 'login') == FALSE)
        {
            $validasi = [
                'error'         => true,
                'login_error'   => $this->form_validation->getErrors(),
            ];
            echo json_encode($validasi);
        }

        //Jika Data Valid
        else
        {
            //Cek Data User Berdasarkan Email
            $cekUser = $this->M_user->where('email', $email)->first();
            $cipherText = $cekUser['password'];

            //Jika User Ada
            if ($cekUser) 
            {
                //Cek Password
                $p = $this->encrypter->decrypt(base64_decode($cipherText));

                //Jika Password Benar
                if($password == $p)
                {
                    $newdata = [
                        'id'        => $cekUser['id'],
                        'role_id'   => $cekUser['role_id'],
                        'nama'      => $cekUser['nama'],
                        'email'     => $cekUser['email']
                    ];

                    $this->session->set($newdata);

                    //Cek role_id apakah Admin atau Member
                    if($cekUser['role_id'] == 1)
                    {
                        //Admin
                        $validasi = [
                            'success'   => true,
                            'link'      => base_url('dashboard'), 
                        ];

                        echo json_encode($validasi);
                    }
                    else 
                    {
                        //Member
                        $validasi = [
                            'success'   => true,
                            'link'      => base_url('pendaftaran/cekStatusPendaftaran'),
                        ];

                        echo json_encode($validasi);
                    }
                }
                //Password Salah
                else
                {
                    $validasi = [
                        'error'     => true,
                        'login_error' => [
                            'password' => 'Password Salah',
                        ],
                    ];
                    echo json_encode($validasi);
                }
            }
            //Jika User  Tidak Ada
            else
            {
                $validasi = [
                    'error' => true,
                    'login_error' => [
                        'email' => 'Email Tidak Terdaftar', 
                    ], 
                ];

                echo json_encode($validasi);
            }
        }
    }
}
