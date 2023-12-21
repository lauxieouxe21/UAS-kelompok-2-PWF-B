<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPulau extends Model
{
    protected $table = "pulaumaluku";
    protected $primaryKey = "id";
    protected $allowedFields = ['id', 'nama_pulau', 'slug', 'lokasi_pulau', 'luas_pulau', 'koordinat_pulau'];

    public function getpulau($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(["slug" => $slug])->first();
    }

    public function index()
    {
        return view('Pulau_view');
    }
}
