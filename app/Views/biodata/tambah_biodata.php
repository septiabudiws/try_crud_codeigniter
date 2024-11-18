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
        <form action="" method="post">
          <div class="mb-2">
            <label for="basiInput" class="form-label">Nama</label>
            <input type="text" class="form-control" id="basiInput">
          </div>
          <div class="mb-2">
            <label for="basiInput" class="form-label">NIM</label>
            <input type="text" class="form-control" id="basiInput">
          </div>
          <!-- Select -->
          <label for="input-group" class="form-label">Pilih Jurusan</label>
          <div class="input-group mb-2">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
            <select class="form-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="1">Informatika</option>
              <option value="2">Management</option>
              <option value="3">Sistem Informasi</option>
            </select>
          </div>
          <div class="mb-2">
            <label for="basiInput" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="basiInput">
          </div>
          <div class="mb-2">
            <label for="basiInput" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="basiInput">
          </div>
          <div class="mb-2">
            <label for="formFile" class="form-label">Masukkan Foto</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        </div><!--end row-->
        <button type="button" class="btn btn-primary mb-1">Tambah Biodata</button>
        <a href="/" class="btn btn-secondary mb-1">Kembali</a>
      </form>
    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  <?= $this->endSection() ?>
