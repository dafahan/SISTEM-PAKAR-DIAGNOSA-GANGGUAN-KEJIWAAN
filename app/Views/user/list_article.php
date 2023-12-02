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
                $id = 0; 
              foreach($article as $a):
              ?>
                <div class="card" style="border:1px solid;">
                  <div class="card-body">
                    <h5 class="card-title"><h1 class="mb-1"><?= $a['headline'];?></h1></h5>
                    <p class="card-text"><?= $a['description']?></p>
                    <a href="<?=base_url('article/'.$id++);?>" class="btn">Read More <i class=" feather icon-eye"></i></a>
                  </div>
                </div>
          <?php 
              endforeach;
                endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>