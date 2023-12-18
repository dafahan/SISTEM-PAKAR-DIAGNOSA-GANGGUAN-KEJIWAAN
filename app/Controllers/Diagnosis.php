<?php

namespace App\Controllers;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RuleModel;
use App\Models\DiagnosisModel;

class Diagnosis extends BaseController
{
    public function index($page=null,$id=null)
    {   
        $diagnosisModel = new DiagnosisModel();
        $gejalaModel = new \App\Models\GejalaModel();
        if($page=="result"){
            $data = [
                'page' => 'result',
                
            ];
       
            if(in_groups('admin')){
                $data['diagnosis'] = $diagnosisModel->getWithUsers();
                
                return view('admin/daftar_diagnosis',$data);
            }   
            $data['diagnosis'] = $diagnosisModel->getWithUsers(user_id());
            return view('admin/daftar_diagnosis',$data);
        }
        if($page=="delete"){
            $diagnosisModel->deleteDiagnosis($id);
            return redirect()->back();
        }
        $data['gejala'] = $gejalaModel->findAll();
        $data['page'] = 'diagnosa';
        return view('user/diagnose_form', $data);
    }

    public function prosess()
    {
        // Retrieve answers from the submitted form
        $penyakitModel = new PenyakitModel();
        $diagnosisModel = new DiagnosisModel();
        $answers = [];
        
        foreach ($this->request->getPost() as $key => $value) {
            if (strpos($key, 'answer_') === 0 && (int)$value === 1) {
                $gejalaId = str_replace('answer_', '', $key);
                $answers[] = $gejalaId;
            }
        }
        
        $data['page'] = 'diagnosa';
        $symp = $penyakitModel->getByKodePenyakit(diagnose_mental_health($answers));
        $result = $penyakitModel->getByKodePenyakit(diagnose_mental_health($answers));
        $data['diagnosedDiseases'] = ($result == "") ? [] : $result->getResultArray();
        $penyakit = implode(', ', array_column($data['diagnosedDiseases'], 'nama_penyakit'));

        $diagnosa = [
            'nama_penyakit' => $penyakit,
            'user_id' => user_id(),
            'tanggal' => date("Y-m-d"),
        ];
       
        $diagnosisModel->saveDiagnosis($diagnosa);
        return view('user/diagnose_result', $data);
    }
}
