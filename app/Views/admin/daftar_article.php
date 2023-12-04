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
                            <div class="d-flex inline-flex">
                                <a href="<?= base_url('article/edit/'.$no); ?>"><i class="mx-1 feather icon-edit-2"></i></a>
                                <a href="#" class="btn-hapus" data-toggle="modal" data-target="#deleteConfirmationModal" data-articleid="<?= $no ?>"><i class="feather icon-trash"></i></a>
                            </div>
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
  <!-- Add this modal at the end of your HTML body -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this article?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

  <script>
  $(document).ready(function() {
    // Handle delete button click
    $('.btn-hapus').on('click', function() {
      // Get the article ID from the data attribute
      var articleId = $(this).data('articleid');
      
      // Set the delete button's href to the correct delete URL
      $('#confirmDeleteBtn').attr('href', '<?= base_url('article/delete/') ?>' + articleId);
    });
  });
</script>


</section>
<?= $this->endSection() ?>