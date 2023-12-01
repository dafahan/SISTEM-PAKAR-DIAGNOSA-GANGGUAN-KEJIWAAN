<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Penyakit</h4>
          
          <a href="?page=tambah-obat" class="btn btn-primary round waves-effect waves-light">
            Tambah Penyakit
          </a>
          
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Kode Penyakit</th>
                    <th>Nama Penyakit</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($penyakit as $dt) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dt['kode_penyakit']; ?></td>
                      <td><?= $dt['nama_penyakit']; ?></td>
                      <td>
                           <?php //if ($_SESSION['user']['id'] == 0): ?>
                            <div class="d-flex inline-flex">
                        <a href="?page=edit-obat&id=<?= $dt['id_penyakit']; ?>"><i class="mx-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-obat&id=<?= $dt['id_penyakit']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                           </div>
                        <?php //endif;?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>