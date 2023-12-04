<?php

namespace App\Controllers;
use App\Models\GejalaModel;


class Gejala extends BaseController
{           
            public $GejalaModel;

            public function __construct()
            {
                $this->GejalaModel = new GejalaModel();
            }
        public function gejala($proses=null,$id=null){
            if($proses=="add"){
                return view('admin/add_gejala',['page' => 'gejala','kode_gejala' => $this->GejalaModel->newKodeGejala(),]);
            }

            if($proses=="edit"){
                $gejala = $this->GejalaModel->getGejala($id);
               
                return view('admin/add_gejala',['page' => 'gejala','kode_gejala' => $gejala['kode_gejala'],'gejala'=> $gejala,]);
            }

            if($proses=="delete"){
                $this->GejalaModel->deleteGejala($id);
                return redirect()->back();
            }
            
            $data = [
            'gejala' =>  $this->GejalaModel->getGejala(),
            'page' => 'gejala',
                
            ];
            
            return view('admin/daftar_gejala',$data);
        }
        public function prosess($proses=null,$id=null){
            if($proses == "add"){
                $data = [
                    'kode_gejala' => $this->request->getVar('kode_gejala'),
                    'gejala'=> $this->request->getVar('gejala'),
                ];
                $this->GejalaModel->saveGejala($data);
                return redirect()->to(base_url('gejala'));
            }
            if($proses == "edit"){
                $data = [
                    'kode_gejala' => $this->request->getVar('kode_gejala'),
                    'gejala'=> $this->request->getVar('gejala'),
                ];
                $this->GejalaModel->updateGejala($data,$id);
                return redirect()->to(base_url('gejala'));
            }

        }
}