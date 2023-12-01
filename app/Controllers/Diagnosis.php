<?php

namespace App\Controllers;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RuleModel;


class Diagnosis extends BaseController
{
    public function index()
    {
        $gejalaModel = new \App\Models\GejalaModel();
        $data['gejala'] = $gejalaModel->findAll();
        $data['page'] = 'diagnosa';
        return view('user/diagnose_form', $data);
    }

    public function process()
    {
        // Retrieve answers from the submitted form
        $penyakitModel = new PenyakitModel();

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
        $data['diagnosedDiseases'] = ($result=="")? "" : $result->getResultArray();;
        
        return view('user/diagnose_result', $data);
    }
}
