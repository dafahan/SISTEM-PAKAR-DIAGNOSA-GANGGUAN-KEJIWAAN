<?php

namespace App\Controllers;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RuleModel;
use App\Models\ArticleModel;


class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard()
    {   

        $addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
        $prepend_style = ['assets/css/pages/dashboard.css'];

        $data=[
            'prepend_style' => $prepend_style,
            'addon_script' => $addon_script,
            'page' => 'dashboard',
        ];


        return view('admin/dashboard',$data);
    }
    public function gejala(){
        $GejalaModel = new GejalaModel();
        $data = [
          'gejala' =>  $GejalaModel->getGejala(),
          'page' => 'gejala',
            
        ];
        
        return view('admin/daftar_gejala',$data);
    }

    public function penyakit(){
        $PenyakitModel = new PenyakitModel();
        $data = [
          'penyakit' =>  $PenyakitModel->getPenyakit(),
          'page' => 'penyakit',
            
        ];
       
        return view('admin/daftar_penyakit',$data);
    }

    public function rule(){
        $RuleModel = new RuleModel();
        $data = [
          'rule' =>  $RuleModel->getRule(),
          'page' => 'rule',
            
        ];
       
        return view('admin/daftar_rule',$data);
    }
    public function article(){
        $articleModel = new ArticleModel();
        $article = $articleModel->fetchData();
        $data = [
            'page' => 'article',
            'article' => $article['hasPart'],
        ];
        return view('user/list_article',$data);
    }
    public function articleDetail($id){
       
        $articleModel = new ArticleModel();
        $article = $articleModel->fetchData();
        $data = [
            'page' => 'article',
            'article' => $article['hasPart'][$id],
        ];
        return view('user/article',$data);
    }
}
