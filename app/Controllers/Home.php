<?php

namespace App\Controllers;
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
    


   
    // ArticleController.php

public function article(){
    $articleModel = new ArticleModel();
  
    $perPage = 10;
    $currentPage = $this->request->getVar('page') ? $this->request->getVar('page') : 1;
    $article = $articleModel->fetchData();
    $start = ($currentPage - 1) * $perPage;
    $subset = array_slice($article['hasPart'], $start, $perPage);
    $totalArticles = count($article['hasPart']);
    $maxPages = ceil($totalArticles / $perPage);
    $pager = \Config\Services::pager(null, null, false);
    $pager->setPath('article'); 
    $data = [
        'page' => 'article',
        'article' => $subset,
        'pager' => $pager,
        'currentPage' => $currentPage,
        'maxPages' => $maxPages,
    ];

    return view('user/list_article', $data);
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
