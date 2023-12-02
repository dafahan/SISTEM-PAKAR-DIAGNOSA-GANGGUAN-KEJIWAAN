<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><a class="btn feather icon-arrow-left" href="<?= base_url('article');?>">Back</a></h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
          <div class="container mt-1">
          <?php if (!empty($article)): ?>
                <h1 class="mb-1"><?= $article['headline'];?></h1>
                    <p><?= $article['description']?></p>
                    <?php
                        $html = $article['hasPart'][0]['text'];
                        $baseUrl = 'https://www.nhs.uk';
                        $modifiedHtml = preg_replace('/href="([^"]+)"/', 'href="' . $baseUrl . '$1"', $html);
                        echo $modifiedHtml;
                    ?>
                
               
          <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>