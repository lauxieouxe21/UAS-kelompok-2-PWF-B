<?php

namespace App\Controllers;

use App\Models\ModelPulau;

class Pulau extends BaseController
{
    protected $ModelPulau;
    public function __construct()
    {
        $this->ModelPulau = new ModelPulau();
    }
    public function home()
    {
        $pulau = $this->ModelPulau->getpulau;
        $data = [
            'title' => 'Pulau di Maluku',
            'pulau' => $this->ModelPulau->getpulau()
        ];
        return view('Pulau_view', $data);
    }
    public function detail($slug)
    {
        // $komik = $this->komikmodel->getkomik($slug);
        // dd($komik);
        $data = [
            'title' => 'detail komik',
            'pulau' => $this->ModelPulau->getpulau($slug)
        ];


        return view('detail', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'form tambah data pulau',
            // 'kapal' => $this->modelkapal->getkapal()
        ];
        return view('create', $data);
    }

    public function save()
    {

        $slug = url_title($this->request->getVar('nama_pulau'), '-', true);
        $this->ModelPulau->save([
            'nama_pulau' => $this->request->getVar('nama_pulau'),
            'slug' => $slug,
            'lokasi_pulau' => $this->request->getVar('lokasi_pulau'),
            'luas_pulau' => $this->request->getVar('luas_pulau'),
            'koordinat_pulau' => $this->request->getVar('koordinat_pulau'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/pulau');
    }
    public function edit($slug)
    {

        $data = [
            'title' => 'form tambah data ',
            // 'validation' => \config\Services::validation(),
            'pulau' => $this->ModelPulau->getpulau($slug)
        ];
        return view('edit', $data);
    }

    public function update($id)
    {



        $slug = url_title($this->request->getVar('nama_pulau'), '_', true);
        $this->ModelPulau->save([
            'id' => $id,
            'nama_pulau' => $this->request->getVar('nama_pulau'),
            'slug' => $slug,
            'lokasi_pulau' => $this->request->getVar('lokasi_pulau'),
            'luas_pulau' => $this->request->getVar('luas_pulau'),
            'koordinat_pulau' => $this->request->getVar('koordinat_pulau'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/pulau');
    }
    public function delete($id)
    {
        $this->ModelPulau->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pulau');
    }
}
