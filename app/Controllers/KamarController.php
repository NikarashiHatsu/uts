<?php

namespace App\Controllers;

use App\Models\KamarModel;
use CodeIgniter\RESTful\ResourceController;

/**
 * Controller untuk dokter
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
        return view('dashboard/kamar/index');
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
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
