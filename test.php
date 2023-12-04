<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Diagnosis</h4>
          
          <a href="<?= base_url('article/add')?>" class="btn btn-primary round waves-effect waves-light">
            Tambah Article
          </a>
          
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Headline</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($article as $dt) : ?>
                        <tr>
                        <td><?= $no ?></td>
                        <td><?= $dt['headline']; ?></td>
                        <td><?= $dt['description']; ?></td>
                        <td>
                            <?php //if ($_SESSION['user']['id'] == 0): ?>
                                <div class="d-flex inline-flex">
                            <a href="<?= base_url('article/edit/'.$no); ?>"><i class="mx-1 feather icon-edit-2"></i></a>
                            <a href="<?= base_url('article/delete/'.$no); ?>" class="btn-hapus"><i class="feather icon-trash"></i></a>
                            </div>
                            <?php //endif;?>
                        </td>
                        </tr>
                    <?php $no++; endforeach; ?>
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