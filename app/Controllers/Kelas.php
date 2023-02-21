<?php

namespace App\Controllers;

use App\Models\ModelKelas;
use App\Models\ModelDosen;
use App\Models\ModelProdi;
use App\Models\ModelMatkul;
use App\Models\ModelTA;




class kelas extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelKelas = new ModelKelas();
        $this->ModelDosen = new ModelDosen();
        $this->ModelProdi = new ModelProdi();
        $this->ModelMatkul = new ModelMatkul();
        $this->ModelTA = new ModelTA();

    }
    
    public function index()
    {
        $data= [
        'title'     => 'Kelas Perkuliahan',
        'kelas'     => $this->ModelKelas->allData(),
        'ta'        => $this->ModelKelas->allData(),
        'dosen'     => $this->ModelDosen->allData(),
        'prodi'     => $this->ModelProdi->allData(),
        'listmatkul'=> $this->ModelMatkul->allData(),
        'ta_aktif'  => $this->ModelTA->ta_aktif(),
        'ta_list'   => $this->ModelTA->allData(),
        

        'isi'    => 'admin/kelas'
        ];
        return view('layout/wrapper', $data);
    }
    
    public function add()
    {
        $validation = \Config\Services::validation();

        if ($this->validate([
            'nama_kelas'   => [
            'label'         => 'Nama Kelas',
            'rules'         => 'required',
            'errors'        => [
                        'required' => '{field} Harus diisi !',
                        ]
                ],
            ])){
                //jika valid
            $data = [
                'id_ta'         => $this->request->getPost('id_ta'),
                'nama_kelas'    => $this->request->getPost('nama_kelas'),
                'id_prodi'      => $this->request->getPost('id_prodi'),
                'angkatan'      => $this->request->getPost('angkatan'),
                'id_matkul'     => $this->request->getPost('id_matkul'),
                'id_dosen'      => $this->request->getPost('id_dosen'),

            ];
            $this->ModelKelas->add($data);
            session()->setFlashdata('sukses', 'Data berhasil ditambahkan !!!');
            return redirect()->to(base_url('kelas'));
        } else {
            //jika tidak valid
            session()->setFlashdata('error', $validation->getError('nama_kelas'));
            return redirect()->to(base_url('kelas'));
        }
    }


    
    public function update($id_kelas) 
    {
        $data = [
            'id_kelas'   => $id_kelas,
            'id_ta'         => $this->request->getPost('id_ta'),
            'nama_kelas'    => $this->request->getPost('nama_kelas'),
            'id_prodi'      => $this->request->getPost('id_prodi'),
            'angkatan'      => $this->request->getPost('angkatan'),
            'id_matkul'     => $this->request->getPost('id_matkul'),
            'id_dosen'      => $this->request->getPost('id_dosen'),

    ];
        $this->ModelKelas->edit($data);
        session()->setFlashdata('sukses', 'Data berhasil dirubah !!!');
        return redirect()->to(base_url('kelas'));
    }

    public function delete($id_kelas)
    {
        $jml = $this->ModelKelas->jml_anggota($id_kelas);
        if($jml == 0) {
            $data = [
                'id_kelas' => $id_kelas,
            ];
            $this->ModelKelas->delete_data($data);
            session()->setFlashdata('sukses', 'Data berhasil dihapus !!!');
            return redirect()->to(base_url('kelas'));
        } else {
            session()->setFlashdata('error', 'Data tidak bisa dihapus, pastikan tidak ada anggota kelas pada kelas dipilih !');
            return redirect()->to(base_url('kelas'));
        }
    }

    public function anggota_kelas($id_kelas)
    {
        $rmbl = $this->ModelKelas->detailData($id_kelas);
        $data= [
        'title'         => 'Anggota Kelas : ' . '<label class="text-info">'. $rmbl['nama_kelas'] . '</label>',
        'kelas'        => $this->ModelKelas->detailData($id_kelas),
        'mhs'           => $this->ModelKelas->mhs(),
        'anggotakelas'  => $this->ModelKelas->anggotakelas($id_kelas),
        'jml'           => $this->ModelKelas->jml_anggota($id_kelas),
        'isi'            => 'admin/anggota_kelas'
        ];
        return view('layout/wrapper', $data);
    }

    public function tambah_anggota_kelas($id_kelas)
    {
        
            $mhsid = $this->request->getVar('nomhs');
                if ($mhsid == 0) {
                    session()->setFlashdata('error', "Belum ada mahasiswa yang dipilih!");
                    return redirect()->to(base_url('kelas/anggota_kelas/'.$id_kelas));
                    } else{

                    $jmldata = count($mhsid);
                    for ($i = 0; $i < $jmldata; $i++) {
                        $data = [
                            'id_mhs' => $mhsid[$i],
                            'id_kelas' => $id_kelas
                        ];
                        $this->ModelKelas->add_anggota_kelas($data);
                    }
               
                session()->setFlashdata('sukses', "$jmldata Mahasiswa berhasil ditambahkan ke kelas !!!");
                return redirect()->to(base_url('kelas/anggota_kelas/'.$id_kelas));
            }
    } 


    public function hapus_semua_anggota_kelas($id_kelas)
    {
        $mhsid = $this->request->getVar('noanggota');
        if ($mhsid == 0) {
            session()->setFlashdata('error', "Belum ada anggota kelas yang dipilih!");
            return redirect()->to(base_url('kelas/anggota_kelas/'.$id_kelas));
            } else{
                $jmldata = count($mhsid);
                for ($i = 0; $i < $jmldata; $i++) {
                    $data = [
                        'id_anggota_kelas' => $mhsid[$i]
                    ];
                    $this->ModelKelas->delete_semua_anggotakelas($data);
                }
               
                session()->setFlashdata('sukses', "$jmldata Mahasiswa berhasil dihapus dari kelas !!!");
                return redirect()->to(base_url('kelas/anggota_kelas/'.$id_kelas));
            }
   
    }

}