<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="<?= base_url('penyakit')?>" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Penyakit</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="<?= (empty($penyakit))? base_url('penyakit/add'):base_url('penyakit/edit/'.$penyakit['id_penyakit']); ?>" method="post">
              <div class="form-body">
    
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Kode Penyakit </label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Kode penyakit" class="form-control" name="kode_penyakit" value="<?= $kode_penyakit ?>" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama Penyakit</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="nama penyakit" class="form-control" name="nama_penyakit" <?php echo (empty($penyakit))? '' : 'value="'.$penyakit['nama_penyakit'].'"'; ?>required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary"><?php echo (empty($penyakit))? 'CREATE' : 'SIMPAN' ?></button>
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