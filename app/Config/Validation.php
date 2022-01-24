<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        \CodeIgniter\Validation\Rules::class,
        \CodeIgniter\Validation\FormatRules::class,
        \CodeIgniter\Validation\FileRules::class,
        \CodeIgniter\Validation\CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    // Validasi Data Fakultas
    public $fakultas = [
        'nama_fakultas' => [
            'label' => 'Nama Fakultas',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Fakultas Tidak Boleh Kosong',
            ]
        ]
    ];

    //Validasi Data Prodi
    public $prodi = [
        'nama_prodi' => [
            'label' => 'Nama Prodi',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Prodi Tidak Boleh Kosong',
            ]
        ]
    ];

    //Validasi Informasi Pendaftaran
    public $informasi = [
        'tgl_pendaftaran' => [
            'label' => 'Tanggal Pendaftaran',
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Pendaftaran Tidak Boleh Kosong',
            ],
        ],
        'tgl_pengumuman' => [
            'label' => 'Tanggal Pengumuman',
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Pengumuman Lulus Administrasi Tidak Boleh Kosong',
            ],
        ]

    ];

    //Validasi Informasi Pendaftaran
    public $daftar_akun = [
        'nama' => [
            'label' => 'Nama Lengkap',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Lengkap Tidak Boleh Kosong',
            ],
        ],
        'email' => [
            'label' => 'Email',
            'rules' => 'required|valid_email|is_unique[tbl_user.email]',
            'errors' => [
                'required' => 'Email Tidak Boleh Kosong!',
                'valid_email' => 'Email Tidak Valid',
                'is_unique' => 'Email Sudah Terdaftar'
            ],
        ],
        'password' => [
            'label' => 'Password',
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Nama Lengkap Tidak Boleh Kosong',
                'min_length' => 'Password Minimal 8 Karakter!'
            ],
        ],
        'confirm_password' => [
            'label' => 'Confirm Password!',
            'rules' => 'required|min_length[8]|matches[password]',
            'errors' => [
                'required' => 'Nama Lengkap Tidak Boleh Kosong',
                'min_length' => 'Password Minimal 8 Karakter',
                'matches' => 'Confirm Password Tidak Sama dengan Password'
            ],
        ],
    ];
}
