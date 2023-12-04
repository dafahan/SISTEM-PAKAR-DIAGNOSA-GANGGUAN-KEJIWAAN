<?= $this->extend('layout/layout')?>
<?= $this->section('content')?>

<style>
  @import url(https://fonts.googleapis.com/css?family=Asap:400,700);
@import url(https://fonts.googleapis.com/css?family=Bree+Serif&subset=latin-ext,latin);

/* Mixin */
@mixin size($size) {
  width: $size;
  height: $size;
}

/* Global Box Sizing and Font Smoothing */
*, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

/* Body Styles */
body {
  background: #E9F0F4;
}

/* Colors */
$blueLight: #C1CFD9;
$blueDark: #2E3641;
$red: #F97E76;

/* New Post Styles */
.newPost {
  margin: 50px auto;
  padding: 50px 40px;
  width: 100%;
  max-width: 800px;
  min-width: 480px;
  background: #FFF;
  font-family: 'Asap', sans-serif;
}

/* Heading Styles */
.newPost h3 {
  margin: 0 0 20px 0;
  font-size: 30px;
  color: $blueDark;
}

/* Input Styles */
.newPost input[type="text"] {
  padding-left: 15px;
  width: 100%;
  height: 45px;
  border: 1px solid $blueLight;
  box-shadow: inset 0 0 3px $blueLight;
  outline: none;
  font-family: 'Bree Serif', serif;
  font-size: 24px;
  color: $blueLight;
  margin-bottom: 20px;
}

/* Toolbar Styles */
.newPost .toolbar {
  background: $blueDark;
}

.newPost .toolbar button {
  float: left;
  @include size(45px);
  background: $blueDark;
  border: none;
  border-right: 1px solid lighten($blueDark, 10%);
  color: $blueLight;
  outline: none;
}

.newPost .toolbar button:hover {
  background: lighten($blueDark, 5%);
  color: darken($blueLight, 5%);
}

.newPost .toolbar .customSelect {
  float: right;
  position: relative;
}

.newPost .toolbar .customSelect select {
  appearance: none;
  border-radius: 0;
  border: none;
  background: $blueDark;
  height: 45px;
  padding-left: 10px;
  padding-right: 25px;
  color: $blueLight;
  border-left: 1px solid lighten($blueDark, 10%);
  outline: none;
  font-weight: bold;
  cursor: pointer;
}

.newPost .toolbar .customSelect select:hover {
  background: lighten($blueDark, 5%);
  color: darken($blueLight, 5%);
}

.newPost .toolbar .customSelect:after {
  content: "\f0dc";
  font-family: FontAwesome;
  color: $blueLight;
  position: absolute;
  right: 10px;
  top: 15px;
}

.newPost .toolbar:after {
  content: '';
  display: block;
  clear: both;
}

/* Editor Styles */
.newPost .editor {
  min-height: 300px;
  width: 100%;
  resize: none;
  border: 1px solid $blueLight;
  box-shadow: inset 0 0 3px $blueLight;
  outline: none;
  padding: 15px;
  margin-bottom: 20px;
  position: relative;
}

.newPost .editor .saved {
  position: absolute;
  bottom: 0;
  right: 0;
  display: block;
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  color: #FFF;
  text-transform: uppercase;
  background: $blueLight;
  font-weight: bold;
  border-top-left-radius: 15px;
}

/* Buttons Styles */
.newPost .buttons {
  float: right;
}

.newPost .buttons button {
  float: left;
  width: 120px;
  height: 45px;
  border: none;
  color: #FFF;
  text-transform: uppercase;
  outline: none;
  margin-right: 20px;
  font-weight: bold;
  text-decoration: none;
}

.newPost .buttons button:last-of-type {
  margin-right: 0px;
  background: $red;
}

.newPost .buttons button:last-of-type:hover {
  background: lighten($red, 5%);
}

.newPost .buttons button:active {
  box-shadow: inset 0 4px rgba(0, 0, 0, 0.05);
}

.newPost .buttons button:hover {
  background: lighten($blueLight, 5%);
}

.newPost .buttons:after {
  content: '';
  display: block;
  clear: both;
}

.newPost:after {
  content: '';
  display: block;
  clear: both;
}

</style>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="<?= base_url('article/manage')?>" class="btn btn-light float-right mb-2">Kembali</a>
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
            <form action="<?= (empty($article))? base_url('article/add'):base_url('article/edit/'.$id); ?>" method="post">
            <?= csrf_field() ?>  
            <div class="form-body">
    
            <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Headline </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text"  class="form-control" name="headline" <?php echo (empty($article))? '' : 'value="'.$article['headline'].'"'; ?> required>
                      </div>
                    </div>
                 
            
                  <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Description </label>
                      </div>
                      <div class="col-md-8">

                      <textarea class="form-control" name="description" required><?php echo isset($article['description']) ? $article['description'] : ''; ?></textarea>
                    </div>
                  </div>


                  <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Text </label>
                      </div>
                      <div class="col-md-8">
                      <div class="newPost">
  
  <div class="toolbar">
    <button type="button" data-func="bold"><i class="fa fa-bold"></i></button>
    <button type="button" data-func="italic"><i class="fa fa-italic"></i></button>
    <button type="button" data-func="underline"><i class="fa fa-underline"></i></button>
    <button type="button" data-func="justifyleft"><i class="fa fa-align-left"></i></button>
    <button type="button" data-func="justifycenter"><i class="fa fa-align-center"></i></button>
    <button type="button" data-func="justifyright"><i class="fa fa-align-right"></i></button>
    <button type="button" data-func="insertunorderedlist"><i class="fa fa-list-ul"></i></button>
    <button type="button" data-func="insertorderedlist"><i class="fa fa-list-ol"></i></button>
    <div class="customSelect">
      <select data-func="fontname">
        <optgroup label="Serif Fonts">
          <option value="Bree Serif">Bree Serif</option>
          <option value="Georgia">Georgia</option>
           <option value="Palatino Linotype">Palatino Linotype</option>
          <option value="Times New Roman">Times New Roman</option>
        </optgroup>
        <optgroup label="Sans Serif Fonts">
          <option value="Arial">Arial</option>
          <option value="Arial Black">Arial Black</option>
          <option value="Asap" selected>Asap</option>
          <option value="Comic Sans MS">Comic Sans MS</option>
          <option value="Impact">Impact</option>
          <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
          <option value="Tahoma">Tahoma</option>
          <option value="Trebuchet MS">Trebuchet MS</option>
          <option value="Verdana">Verdana</option>
        </optgroup>
        <optgroup label="Monospace Fonts">
          <option value="Courier New">Courier New</option>
          <option value="Lucida Console">Lucida Console</option>
        </optgroup>
      </select>
    </div>
    <div class="customSelect">
      <select data-func="formatblock">
        <option value="h1">Heading 1</option>
        <option value="h2">Heading 2</option>
        <option value="h4">Subtitle</option>
        <option value="p" selected>Paragraph</option>
      </select>
    </div>
  </div>
  <div id="textContainer" class="editor" style="border:1px solid black" contenteditable></div>
  <input type='hidden' name='text' />
</div>
                    </div>
                  </div>
  
                  <div class="col-md-8 offset-md-5">
                    <button type="submit" class="btn btn-primary"><?php echo (empty($article))? 'CREATE' : 'SIMPAN' ?></button>
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
$(document).ready(function() {
    <?php if (!empty($article) && isset($article['hasPart'][0]['text'])): ?>
        let val = <?= json_encode($article['hasPart'][0]['text']) ?>;
        console.log(val);
        $('#textContainer').html(val);
        save();
    <?php endif; ?>
});

$('#textContainer').on('input', function() {
    save();
});
  function save(){
    console.log('save');
    var articleContent = $('#textContainer').html();
console.log(articleContent);
$('input[name="text"]').val(articleContent);
  }
  $('.newPost button[data-func]').click(function(){
    document.execCommand( $(this).data('func'), false 	);
  });

  $('.newPost select[data-func]').change(function(){
    var $value = $(this).find(':selected').val();
    document.execCommand( $(this).data('func'), false, $value);
  });

  if(typeof(Storage) !== "undefined") {

  $('.editor').keypress(function(){
    $(this).find('.saved').detach();
  });
    $('.editor').html(localStorage.getItem("wysiwyg")) ;
    
    $('button[data-func="save"]').click(function(){
      $content = $('.editor').html();
      localStorage.setItem("wysiwyg", $content);
      $('.editor').append('<span class="saved"><i class="fa fa-check"></i></span>').fadeIn(function(){
        $(this).find('.saved').fadeOut(500);
      });
    });
    
    $('button[data-func="clear"]').click(function(){
      $('.editor').html('');
      localStorage.removeItem("wysiwyg");
    });
    
    
  } 

  </script>

<!-- Include the Summernote initialization script -->


<?= $this->endSection() ?>