<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\RESTful\ResourceController;

/**
 * Controller untuk dokter
 *
 * @author      Aghits Nidallah
 * @nim         190511038
 * @kelas       19/C1C/K1
 * @tanggal     2021/12-19
 *
 * @resource    App\Models\PasienModel
 * @package     App\Controllers
 */
class PasienController extends ResourceController
{
    protected $modelName = PasienModel::class;

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('dashboard/pasien/index', [
            'pasien' => $this->model->findAll(),
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
        return view('dashboard/pasien/new');
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
                'alamat',
                'umur',
                'jenis_kelamin',
            ]))) {
                return redirect()->back()->with('validation_errors', $this->model->errors());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah data pasien');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        return view('dashboard/pasien/edit', [
            'pasien' => $this->model->find($id),
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
                'alamat',
                'umur',
                'jenis_kelamin',
            ]))) {
                return redirect()->back()->with('validation_errors', $this->model->errors());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil mengubah data pasien');
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

        return redirect()->back()->with('success', 'Berhasil menghapus data pasien');
    }
}
