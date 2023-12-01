<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Result</h4>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
          <div class="container mt-5">
                <h1 class="mb-4">Diagnosis Result</h1>

                <?php if (!empty($diagnosedDiseases)): ?>
                    <p>Based on the observed symptoms, the possible mental diseases are:</p>
                    <ul class="list-group">
                        <?php foreach ($diagnosedDiseases as $disease): ?>
                        <li class="list-group-item"><?php echo $disease['nama_penyakit']; ?></li>
                        <?php endforeach; ?>
                            
                        
                    </ul>
                <?php else: ?>
                    <p>The symptoms you give do not specifically indicate a mental diseases</p>
                <?php endif; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>