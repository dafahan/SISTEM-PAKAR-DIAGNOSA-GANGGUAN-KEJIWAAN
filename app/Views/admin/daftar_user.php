<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>


<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User</h4>
          
          
          
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th></th>
                    <th>Username</th>
                    <th>Email</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($users as $dt) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dt->username; ?></td>
                      <td><?= $dt->email; ?></td>
                     
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