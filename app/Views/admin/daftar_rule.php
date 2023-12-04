<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Rule</h4>
          
          <a href="<?= base_url('rule/add'); ?>" class="btn btn-primary round waves-effect waves-light">
            Tambah Rule
          </a>
          
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Kode Rule</th>
                    <th>Kode Gejala</th>
                    <th>Kode Penyakit</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($rule as $dt) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dt['kode_rule']; ?></td>
                      <td><?= $dt['kode_gejala']; ?></td>
                      <td><?= $dt['kode_penyakit']; ?></td>
                      <td>
                           <?php //if ($_SESSION['user']['id'] == 0): ?>
                            <div class="d-flex inline-flex">
                        <a href="rule/edit/<?= $dt['id_rule']; ?>"><i class="mx-1 feather icon-edit-2"></i></a>
                        <a href="rule/delete/<?= $dt['id_rule']; ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
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