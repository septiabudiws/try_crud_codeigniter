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
            <h4 class="mb-sm-0">Tabel Biodata</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->
      <a href="/tambah" class="btn btn-primary mb-1">Tambah Biodata</a>
      <div class="row">
        <div class="table-responsive">
          <table class="table align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Program Studi</th>
                <th scope="col">Alamat</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Action
                </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($biodata as $get) : ?>
                <tr>
                <td>
                  <div class="d-flex gap-2 align-items-center">
                    <div class="flex-shrink-0">
                      <img src="/foto/<?= $get['foto']; ?>" alt=""
                        class="avatar-xs rounded-circle" />
                    </div>
                    <div class="flex-grow-1">
                      <div><?= $get['nama']; ?></div>
                      <a href="/detail/<?= $get['id'] ?>" class="d-block">Lihat Profil</a>
                    </div>
                  </div>
                </td>
                <td><?= $get['nim']; ?></td>
                <td><?= $get['nama_jurusan']; ?></td>
                <td><?= $get['alamat']; ?></td>
                <td><?= $get['no_telpon']; ?></td>
                <td>
                  <a href="/biodata/edit/<?= $get['id'] ?>" class="btn btn-info">Edit</a>
                  <a href="/biodata/hapus/<?= $get['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Mengapus?')">Hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <!-- end table -->
        </div>
        <!-- end table responsive -->
      </div><!--end row-->

    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  <?= $this->endSection() ?>
