<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Form Tambah Biodata</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <div class="row">
        <form action="/tambah/save" method="post" enctype="multipart/form-data">
          <?= csrf_field() ?>
          <div class="mb-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
          </div>
          <div class="mb-2">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" id="nim">
          </div>
          <!-- Select -->
          <label for="input-group" class="form-label">Pilih Jurusan</label>
          <div class="input-group mb-2">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
            <select class="form-select" id="inputGroupSelect01" name="jurusan">
              <option selected disabled value="">Pilih ...</option>
              <?php foreach($jurusan as $key) : ?>
              <option value="<?= $key['id_jurusan'] ?>"><?= $key['jurusan'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-2">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
          </div>
          <div class="mb-2">
            <label for="telpon" class="form-label">No. Telepon</label>
            <input type="text" name="telpon" class="form-control" id="telpon">
          </div>
          <div class="mb-2">
            <label for="formFile" class="form-label">Masukkan Foto</label>
            <input class="form-control" type="file" name="foto" id="formFile">
          </div>
        </div><!--end row-->
        <button type="submit" class="btn btn-primary mb-1">Tambah Biodata</button>
        <a href="/" class="btn btn-secondary mb-1">Kembali</a>
      </form>
    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  <?= $this->endSection() ?>
