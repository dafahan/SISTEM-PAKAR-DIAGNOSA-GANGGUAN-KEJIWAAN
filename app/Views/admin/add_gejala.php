<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="<?= base_url('gejala')?>" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Gejala</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?= (empty($gejala))? base_url('gejala/add'):base_url('gejala/edit/'.$gejala['id_gejala']); ?>" method="post">
              <div class="form-body">
    
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Kode Gejala </label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Kode Gejala" class="form-control" name="kode_gejala" value="<?= $kode_gejala ?>" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Gejala</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="keterangan" class="form-control" name="gejala" <?php echo (empty($gejala))? '' : 'value="'.$gejala['gejala'].'"'; ?>required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary"><?php echo (empty($gejala))? 'CREATE' : 'SIMPAN' ?></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>