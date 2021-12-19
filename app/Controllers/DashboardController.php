<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModel;
use App\Models\KamarModel;
use App\Models\PasienModel;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('dashboard/index', [
            'kamar_count' => (new KamarModel)->countAll(),
            'pasien_count' => (new PasienModel)->countAll(),
            'dokter_count' => (new DokterModel)->countAll(),
        ]);
    }
}
