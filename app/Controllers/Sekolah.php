<?php

namespace App\Controllers;

use App\Models\SekolahModel;
use CodeIgniter\HTTP\RequestInterface;

class Sekolah extends BaseController
{
    protected $sekolahModel;
    public function __construct()
    {
        $this->sekolahModel = new SekolahModel();
    }
    // public function getsekolah() {
    //     if($slug==false){
    //         return $this->findAll();
    //     }
    //     return $this->where(['slug'=>$slug])->first(); 
    // }

   
    public function index()
    {
        $pager = \Config\Services::pager();
        //$sekolah = $this->sekolahModel->findAll();

        $data = [
            'title' => 'Daftar Sekolah',
            'seko' => $this->sekolahModel->getSekolah(),
            'sekolah' => $this->sekolahModel->paginate(3),           
            'pager' => $this->sekolahModel->pager
        ];
        // dd($data);
        //dd($sekolah);
        //$sekolahModel = new \App\Models\SekolahModel()
        //$sekolahModel = new SekolahModel();

        return view('sekolah/index', $data);
    }

    public function detail($slug)
    {
        // echo $slug;
        // $sekolah=$this->sekolahModel->where(['slug'=>$slug])->first();
        $data = [
                'title' => 'Detail Sekolah',
                'sekolah' => $this->sekolahModel->getSekolah($slug)
            ];

        // $sek = new SekolahModel();

        // $data['sekolah'] = $sek->getSekolah($slug);

        // dd($data);

        // $db      = \Config\Database::connect();
        // $builder = $db->table('ms_school');
        // $query   = $builder->get(2,0);

        // $this->jancok();

        // $se = $this->sekolahModel->getSekolah($slug);
        // if(empty($sekolah)){
        //     die("Artikel tidak ditemukan COK");
        // } 

            //jika sekolah tidak ada di tabel
            
            if (empty($data['sekolah'])) {
                    throw new \CodeIgniter\Exceptions\PageNotFoundException('Sekolah' . $slug . ' tidak 
                    terdaftar.');
                }                

        return view('sekolah/detail', $data);
    }

    public function create()
    {
        //session();
        $data = [
            'title' => 'Form Tambah Data Sekolah',
            'validation' => \Config\Services::validation()
        ];

        return view('sekolah/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[ms_school.name]',
                'error' => [
                    'required' => '{field} sekolah harus diisi.',
                    'is_unique' => '{field} sekolah sudah terdaftar.'
                ]
                ],
                'gedung' => [
                    'rules' => 'max_size[gedung,3072]|is_image[gedung]|mime_in[gedung,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang Anda pilih bukan gambar',
                        'mime_in' => 'Yang Anda pilih bukan gambar'
                    ]
                ]
        ])) {
            // $validation = \Config\Services::validation();
            // //dd($validation);
            // return redirect()->to('sekolah/create')->withInput()->with('validation', $validation);
            return redirect()->to('sekolah/create')->withInput();
        }

        // ambil gambar
        $fileGedung = $this->request->getFile('gedung');
        // jika tidak ada gambar yang diupload
        if ($fileGedung->getError() == 4){
            $namaGedung = 'default.jpg';
        } else{
            // generate nama gedung random
            $namaGedung = $fileGedung->getRandomName();
            // pindahkan file ke folder img
            $fileGedung->move('img', $namaGedung);
        }
        // ambil nama file
        //$namaGedung = $fileGedung->getName();

        // dd($this->request->getVar());
        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->sekolahModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'alamat' => $this->request->getVar('alamat'),
            'invoice' => $this->request->getVar('invoice'),
            'phone' => $this->request->getVar('phone'),
            'gedung'=> $namaGedung
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

        return redirect()->to('/sekolah');
    }

    public function delete($id_school)
    {
        $this->sekolahModel->delete($id_school);
        return redirect()->to('/sekolah');
    }
}
