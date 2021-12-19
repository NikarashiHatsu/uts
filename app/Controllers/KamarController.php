<?php

namespace App\Controllers;

use App\Models\DokterModel;
use App\Models\KamarModel;
use CodeIgniter\RESTful\ResourceController;

/**
 * Controller untuk kamar
 *
 * @author      Aghits Nidallah
 * @nim         190511038
 * @kelas       19/C1C/K1
 * @tanggal     2021/12-19
 *
 * @resource    App\Models\KamarModel
 * @package     App\Controllers
 */
class KamarController extends ResourceController
{
    protected $modelName = KamarModel::class;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('dashboard/kamar/index', [
            'kamar' => $this
                ->model
                ->select('kamars.*, dokters.nama AS nama_dokter, dokters.bidang_keahlian')
                ->join('dokters', 'dokters.id = kamars.dokter_id')
                ->findAll(),
        ]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('dashboard/kamar/new', [
            'dokter' => (new DokterModel)->findAll(),
        ]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try {
            if (!$this->model->insert($this->request->getPost([
                'nama',
                'kapasitas',
                'daerah',
                'dokter_id',
            ]))) {
                return redirect()->back()->with('validation_errors', $this->model->errors());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah data kamar');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        return view('dashboard/kamar/edit', [
            'kamar' => $this->model->find($id),
            'dokter' => (new DokterModel)->findAll(),
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        try {
            if (!$this->model->update($id, $this->request->getPost([
                'nama',
                'kapasitas',
                'daerah',
                'dokter_id',
            ]))) {
                return redirect()->back()->with('validation_errors', $this->model->errors());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah data kamar');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        try {
            $this->model->delete($id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus data kamar');
    }
}
