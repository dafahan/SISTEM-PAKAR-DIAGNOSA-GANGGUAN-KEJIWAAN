<?php

namespace App\Controllers;
use App\Models\PenyakitModel;


class Penyakit extends BaseController
{           
            public $PenyakitModel;

            public function __construct()
            {
                $this->PenyakitModel = new PenyakitModel();
            }
            public function penyakit($proses=null,$id=null){
                if($proses=="add"){
                    return view('admin/add_penyakit',
                    [
                    'page' => 'penyakit',
                    'kode_penyakit' => $this->PenyakitModel->newKodePenyakit(),
                    ]);
                }
    
                if($proses=="edit"){
                    $penyakit = $this->PenyakitModel->getPenyakit($id);
                   
                    return view('admin/add_penyakit',['page' => 'penyakit','kode_penyakit' => $penyakit['kode_penyakit'],'penyakit'=> $penyakit,]);
                }
                
                if($proses=="delete"){
                    $this->PenyakitModel->deletePenyakit($id);
                    return redirect()->back();
                }
                
                $data = [
                'penyakit' =>  $this->PenyakitModel->getPenyakit(),
                'page' => 'penyakit',
                    
                ];
                
                return view('admin/daftar_penyakit',$data);
            }
            public function prosess($proses=null,$id=null){
                if($proses == "add"){
                    $data = [
                        'kode_penyakit' => $this->request->getVar('kode_penyakit'),
                        'nama_penyakit'=> $this->request->getVar('nama_penyakit'),
                    ];
                    $this->PenyakitModel->savePenyakit($data);
                    return redirect()->to(base_url('penyakit'));
                }
                if($proses == "edit"){
                    $data = [
                        'kode_penyakit' => $this->request->getVar('kode_penyakit'),
                        'nama_penyakit'=> $this->request->getVar('nama_penyakit'),
                    ];
                
                    $this->PenyakitModel->updatePenyakit($data,$id);
                    return redirect()->to(base_url('penyakit'));
                }
    
            }
}