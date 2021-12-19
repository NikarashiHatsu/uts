<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'kamars';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'nama',
        'kapasitas',
        'daerah',
        'dokter_id',
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
        'kapasitas' => 'required|integer',
        'daerah' => 'required|string',
        'dokter_id' => 'required|integer',
    ];
    protected $validationMessages   = [
        'nama' => [
            'required' => 'Nama tidak boleh kosong',
            'string' => 'Nama harus berupa string',
        ],
        'kapasitas' => [
            'required' => 'Kapasitas tidak boleh kosong',
            'integer' => 'Kapasitas harus berupa integer',
        ],
        'daerah' => [
            'required' => 'Daerah tidak boleh kosong',
            'string' => 'Daerah harus berupa string',
        ],
        'dokter_id' => [
            'required' => 'Dokter tidak boleh kosong',
            'integer' => 'Dokter harus berupa integer',
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
