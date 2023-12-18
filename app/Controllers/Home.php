<?php

namespace App\Controllers;
use App\Models\PenyakitModel;
use App\Models\RuleModel;
use App\Models\UserModel;
use App\Models\ArticleModel;
use App\Models\DiagnosisModel;

class Home extends BaseController
{
    public function index()
    {       
        //dd(in_groups('admin'));
        return redirect()->to(base_url('dashboard'));
       
       
    }

    public function user(){
        $userModel = new UserModel();
        $users = $userModel->findAll();
    
        return view('admin/daftar_user',['page'=>'user','users'=>$users]);
    }
    public function dashboard()
    {   
       
        $addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
        $prepend_style = ['assets/css/pages/dashboard.css'];
        $diagnosisModel = new DiagnosisModel();
        $rowCnt = count($diagnosisModel->getDiagnosis());
        $data=[
            'prepend_style' => $prepend_style,
            'addon_script' => $addon_script,
            'page' => 'dashboard',
            'diagnosis' => $rowCnt,
        ];


        return view('admin/dashboard',$data);
    }
    


   
    // ArticleController.php

public function article($page=null,$id=null){
   
    $articleModel = new ArticleModel();
   
    $article = $articleModel->fetchData();
    $data = [
        'page' => 'article',
    ];
    if($page=='manage'){
        $data['page'] = 'manage';
        $data['article'] = $article['hasPart'];
        return view('admin/daftar_article',$data);
    }
    if($page=="delete"){
        $articleModel->deleteItem($id);
        return redirect()->back();
    }
    if($page=='detail'){
        $data['article'] = $article['hasPart'][$id-1];
        return view('user/article',$data);
        
    }
    
    if($page=="add"){
        $data['page'] = 'manage';
        return view('admin/add_article',$data);   
    }
    if($page=="edit"){
        $data['page'] = 'manage';
        $data['article'] = $article['hasPart'][$id-1];
        $data['id'] = $id;
        //dd($data);
        return view('admin/add_article',$data);   
    }
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

        public function prosess($proses=null,$id=null){

           $articleModel = new ArticleModel();

            if($proses == "add"){
                $data = [
                    'headline' => $this->request->getVar('headline'),
                    'text'=> $this->request->getVar('text'),
                    'description'=> $this->request->getVar('description'),
                ];
               
                $articleModel->createItem($data);
                
                return redirect()->to(base_url('article/manage'));
            }
            if($proses == "edit"){
                $data = [
                    'headline' => $this->request->getVar('headline'),
                    'text'=> $this->request->getVar('text'),
                    'description'=> $this->request->getVar('description'),
                ];
                //dd($data);
                $articleModel->updateItem($id,$data);
                return redirect()->to(base_url('article/manage'));
            }

        }
}
