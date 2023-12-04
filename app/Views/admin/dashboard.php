<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>

<section id="dashboard-analytics">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-activity text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?=  $diagnosis; ?></h2>
          <p class="mb-0">Diagnosis</p>
        </div>
        <div class="card-content">
          <!-- <div id="dokter-chart"></div> -->
        </div>
      </div>
    </div>

    

    

    
  </div>
</section>
<!-- Dashboard Analytics end -->
<script>
  var count_dokter = '<?php echo 0;//$count_dokter; ?>';
</script>

<?= $this->endSection() ?>