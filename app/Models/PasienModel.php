<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'pasiens';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'nama',
        'alamat',
        'umur',
        'jenis_kelamin',
    ];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'umur' => 'required|integer',
        'jenis_kelamin' => 'required|string',
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'Nama tidak boleh kosong',
            'string' => 'Nama harus berupa string',
        ],
        'alamat' => [
            'required' => 'Alamat tidak boleh kosong',
            'string' => 'Alamat harus berupa string',
        ],
        'umur' => [
            'required' => 'Umur tidak boleh kosong',
            'integer' => 'Umur harus berupa integer',
        ],
        'jenis_kelamin' => [
            'required' => 'Jenis kelamin tidak boleh kosong',
            'string' => 'Jenis kelamin harus berupa string',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}
