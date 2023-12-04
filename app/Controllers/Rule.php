<?php

namespace App\Controllers;
use App\Models\RuleModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;

class Rule extends BaseController
{        
    public $RuleModel;

    public function __construct()
    {
        $this->RuleModel = new RuleModel();
    }

    public function rule($proses=null,$id=null){
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();
        if($proses=="add"){
            
    
            $data = [
                'kode_rule' => $this->RuleModel->newKodeRule(),
                'gejalaOptions' => $gejalaModel->findAll(), // Assuming you want to populate gejala dropdown from the gejala table
                'penyakitOptions' => $penyakitModel->findAll(),
                'page' => 'rule', // Assuming you want to populate penyakit dropdown from the penyakit table
            ];
            
            
            return view('admin/add_rule',$data);
        }
        
        if($proses=="edit"){
            $rule = $this->RuleModel->getRule($id);
           
            return view('admin/add_rule',[
                'page' => 'rule',
                'kode_rule' => $rule['kode_rule'],
                'gejalaOptions' => $gejalaModel->findAll(), // Assuming you want to populate gejala dropdown from the gejala table
                'penyakitOptions' => $penyakitModel->findAll(),
                'rule'=> $rule,
            ]);
        }
        
        if($proses=="delete"){
            $this->RuleModel->deleteRule($id);
            return redirect()->back();
        }
        
        $data = [
        'rule' =>  $this->RuleModel->getRule(),
        'page' => 'rule',
            
        ];
        
        return view('admin/daftar_rule',$data);
    }
    public function prosess($proses=null,$id=null){
        if($proses == "add"){
            $selectedGejala = $this->request->getPost('gejala');
           
            $kodeGejala = implode(' and ', $selectedGejala);
            $data = [
                'kode_gejala' => $kodeGejala,
                'kode_rule' => $this->request->getVar('kode_rule'),
                'kode_penyakit'=> $this->request->getVar('kode_penyakit'),
            ];
           
            $this->RuleModel->saveRule($data);
            return redirect()->to(base_url('rule'));
        }
        if($proses == "edit"){
            $selectedGejala = $this->request->getPost('gejala');
          
            $kodeGejala = implode(' and ', $selectedGejala);
            $data = [
                'kode_gejala' => $kodeGejala,
                'kode_rule' => $this->request->getVar('kode_rule'),
                'kode_penyakit'=> $this->request->getVar('kode_penyakit'),
            ];
        
            $this->RuleModel->updateRule($data,$id);
            return redirect()->to(base_url('rule'));
        }

    }
}