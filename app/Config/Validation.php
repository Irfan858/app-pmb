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

    //Validasi Pendaftaran Akun
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

    //Validasi Login
    public $login = [
        'email' => [
            'label' => 'Email',
            'rules' => 'required|valid_email',
            'errors' => [
                'required' => 'Email Tidak Boleh Kosong!',
                'valid_email' => 'Email Tidak Valid!',
            ],
        ],
        'password' => [
            'label' => 'Password',
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'Password Tidak Boleh Kosong!',
                'min_length' => 'Password Minimal 8 Karakter!',
            ],
        ],
    ];

    // Validasi Pendaftaran - Tahap Satu (Biodata)
    public $tahap_satu = [
        'nama_peserta' => [
            'label' => 'Nama Peserta',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Peserta Tidak Boleh Kosong!',
            ],
        ],
        'tempat_lahir' => [
            'label' => 'Tempat Lahir',
            'rules' => 'required',
            'errors' => [
                'required' => 'Tempat Lahir Peserta Tidak Boleh Kosong!',
            ],
        ],
        'tanggal_lahir' => [
            'label' => 'Tanggal Lahir',
            'rules' => 'required',
            'errors' => [
                'required' => 'Tanggal Lahir Peserta Tidak Boleh Kosong!',
            ],
        ],
        'jenis_kelamin' => [
            'label' => 'Jenis Kelamin',
            'rules' => 'required',
            'errors' => [
                'required' => 'Jenis Kelamin Peserta Tidak Boleh Kosong!',
            ],
        ],
        'agama' => [
            'label' => 'Agama',
            'rules' => 'required',
            'errors' => [
                'required' => 'Agama Peserta Tidak Boleh Kosong!',
            ],
        ],
        'no_hp' => [
            'label' => 'No. Handphone',
            'rules' => 'required|numeric|max_length[12]',
            'errors' => [
                'required' => 'Nama Peserta Tidak Boleh Kosong!',
                'numeric' => 'No. Handphone Peserta tidak valid!',
                'max_length' => 'No. Handphone Peserta Maksimal 12 Angka!',
            ],
        ],
        'alamat' => [
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat Peserta Tidak Boleh Kosong!',
            ],
        ],
        'nama_orangtua' => [
            'label' => 'Nama Orangtua',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Orangtua Peserta Tidak Boleh Kosong!',
            ],
        ],
        'pekerjaan_orangtua' => [
            'label' => 'Pekerjaan Orangtua',
            'rules' => 'required',
            'errors' => [
                'required' => 'Pekerjaan Orangtua Peserta Tidak Boleh Kosong!',
            ],
        ],
        'no_hp_orangtua' => [
            'label' => 'No. Handphone Orangtua',
            'rules' => 'required|numeric|max_length[12]',
            'errors' => [
                'required' => 'No. Handphone Orangtua Peserta Tidak Boleh Kosong!',
                'numeric' => 'No. Handphone Orangtua Peserta tidak Valid!',
                'max_length' => 'No.Handphone Orangtua Peserta Maksimal 12 Angka!'
            ],
        ],
        'nama_sekolah' => [
            'label' => 'Nama Sekolah',
            'rules' => 'required',
            'errors' => [
                'required' => 'Nama Sekolah Peserta Tidak Boleh Kosong!',
            ],
        ],
        'tahun_lulus' => [
            'label' => 'Tahun Lulus',
            'rules' => 'required|numeric|max_length[4]',
            'errors' => [
                'required' => 'Tahun Lulus Peserta Tidak Boleh Kosong!',
                'numeric' => 'Tahun Lulus Peserta tidak Valid!',
                'max_length' => 'Tahun Lulus Peserta Maksimal 4 Angka!'
            ],
        ],
        'alamat_sekolah' => [
            'label' => 'Alamat Sekolah',
            'rules' => 'required',
            'errors' => [
                'required' => 'Alamat Sekolah Peserta Tidak Boleh Kosong!',
            ],
        ],
    ];

    //Validasi Pendaftaran - Tahap Dua (Pilih Fakultas Dan Prodi)
    public $tahap_dua = [
        'fakiltas_id' => [
            'label' => 'Fakultas',
            'rules' => 'required',
            'errors' => [
                'required' => 'Pilihan Fakultas Tidak Boleh Kosong!',
            ],
        ],
        'prodi_id' => [
            'label' => 'Prodi',
            'rules' => 'required',
            'errors' => [
                'required' => 'Pilihan Prodi Tidak Boleh Kosong!',
            ],
        ],
    ];

    //Validasi Pendaftaran - Tahap Tiga (Upload Berkas)
    public $tahap_tiga = [
        'foto' => [
            'label' => 'Foto',
            'rules' => 'uploaded[foto]|max_size[foto,500]|max_dims[foto,345,472]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg]',
            'errors' => [
                'uploaded' => 'Foto Peserta Tidak Boleh Kosong!',
                'max_size' => 'Ukuran File Foto Peserta Maksimal 500KB!',
                'max_dims' => 'Ukuran Dimensi Foto Peserta 3X4 Cm!',
                'is_image' => 'File Yang Anda Pilih Bukan Gambar!',
                'mime_in' => 'Format File Yang Anda Pilih Tidak Sesuai!'
            ],
        ],
        'berkas' => [
            'label' => 'Berkas',
            'rules' => 'uploaded[berkas]|max_size[berkas,2048]|ext_in[berkas,pdf]',
            'errors' => [
                'uploaded' => 'Berkas Peserta Tidak Boleh Kosong!',
                'max_size' => 'Ukuran Berkas Peserta Maksimal 2MB!',
                'ext_in' => 'Format File Berkas Peserta Tidak Sesuai'
            ],
        ],
    ];
}
