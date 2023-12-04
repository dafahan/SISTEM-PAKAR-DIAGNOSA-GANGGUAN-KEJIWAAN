<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Articles</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard ">
          <div class="container mt-1 ">
                        <?php if (!empty($article)):
                            $id=(($currentPage-1)*10)+1;
                                foreach($article as $a):
                                    ?>
                                    <div class="card" style="border:1px solid;">
                                        <div class="card-body">
                                            <h5 class="card-title"><h1 class="mb-1"><?= $a['headline'];?></h1></h5>
                                            <p class="card-text"><?= $a['description']?></p>
                                            <a href="<?=base_url('article/detail/'.$id++);?>" class="btn">Read More <i class="feather icon-eye"></i></a>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                            endif; ?>

                            <!-- Pagination Links -->
                            <div class="d-flex justify-content-center mt-3">
                                  <nav aria-label="Page navigation">
                                      <ul class="pagination">
                                          
                                              <li class="active">
                                              <?php if($currentPage > 1): ?>
                                                <a href="http://localhost:8080/article?page=<?= $currentPage-1 ?>"><i class="feather icon-chevron-left"></i></a>
                                                <?php endif; ?>
                                                <a class="mx-2"  href="http://localhost:8080/article?page=<?= $currentPage ?>"><?= $currentPage; ?></a>
                                              <?php if($currentPage < $maxPages): ?>
                                              <a  href="http://localhost:8080/article?page=<?= $currentPage+1 ?>"><i class="feather icon-chevron-right"></i>
                                              <?php endif; ?>
                                            </li>
                                             
                                          </ul>
                                    </nav>
                            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>