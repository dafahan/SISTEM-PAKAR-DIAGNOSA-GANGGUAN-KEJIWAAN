<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>

<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="<?= base_url('rule')?>" class="btn btn-light float-right mb-2">Kembali</a>
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
          
            <form action="<?= (empty($rule))? base_url('rule/add'):base_url('rule/edit/'.$rule['id_rule']); ?>" method="post">
            <?= csrf_field() ?>
              <div class="form-body">
             
              <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Kode Rule </label>
                      </div>
                      <div class="col-md-8">

                        <input type="text" placeholder="Kode Rule" class="form-control" name="kode_rule" value="<?= $kode_rule ?>" readonly>
                      </div>
                    </div>
                  </div>


              <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Penyakit</label>
                      </div>
                      <div class="col-md-8">
                        <select class="form-select" id="penyakit" name="kode_penyakit" required>
                        <?php foreach ($penyakitOptions as $penyakit) : ?>
                            <option value="<?= $penyakit['kode_penyakit']; ?>" <?= (!empty($rule) && $rule['kode_penyakit'] == $penyakit['kode_penyakit']) ? 'selected' : ''; ?>>
                                <?= $penyakit['nama_penyakit']; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Gejala</label>
                      </div>
                      <div class="col-md-8">
                      <select class="form-select" name="gejala[]" multiple required>
                      <?php foreach ($gejalaOptions as $gejala) : ?>
                            <?php
                                $isSelected = false;
                                if (!empty($rule)) {
                                    $isSelected = in_array($gejala['kode_gejala'], explode(' and ', $rule['kode_gejala']));
                                }
                            ?>
                            <option value="<?= $gejala['kode_gejala']; ?>" <?= $isSelected ? 'selected' : ''; ?>>
                                <?= $gejala['gejala']; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
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
<script>
/*for without holding ctrl/command key*/

$(document).ready(function() {
    $('option').mousedown(function(e) {
        e.preventDefault();

        var originalScrollTop = $(this).parent().scrollTop();
        var isSelected = !$(this).prop('selected');

        $(this).prop('selected', isSelected);
        var self = this;
        $(this).parent().focus();
        setTimeout(function() {
            $(self).parent().scrollTop(originalScrollTop);
            logSelectedValues();
        }, 0);

        return false;
    });

    function logSelectedValues() {
        var selectedValues = [];
        $('select[name="gejala[]"] option:selected').each(function() {
            selectedValues.push($(this).val());
        });
        console.log('Selected Values:', selectedValues);
    }
});

    </script>
<?= $this->endSection() ?>