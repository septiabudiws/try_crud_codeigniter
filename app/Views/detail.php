<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

  <div class="page-content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex mb-3">
              </div>
              <div class="text-center border-bottom border-dashed pb-4">
                <img src="/foto/<?= $biodata['foto'] ?>" alt=""
                  class="avatar-lg rounded-circle p-1 img-thumbnail">
                <div class="mt-3">
                  <h5><?= $biodata['nama'] ?> <i class="bi bi-patch-check-fill align-baseline text-info ms-1"></i></h5>
                  <p class="text-muted">Web Developer</p>
                </div>
              </div>
            </div>
          </div><!--end card-->
        </div><!--end col-->

        <div class="col-xl-9">
          <div class="row align-items-center g-3 mb-3">
            <div class="col-md order-1">
              <!-- Nav tabs -->
              <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1" role="tablist">
                <li class="nav-item">
                  <p class="nav-link active">
                    More Information
                  </p>
                </li>
              </ul>
            </div><!--end col-->
            <div class="col-md-auto order-lg-2">
              <a href="pages-profile-settings.html" class="btn btn-primary"><i
                  class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
            </div><!--end col-->
          </div><!--end row-->

          <div class="tab-content">
            <div class="tab-pane active" id="overview-tab" role="tabpanel">
              <div class="card">
                <div class="card-body">
                  <div class="mb-0">
                    <h5 class="card-title mb-3">About Me</h5>
                <div class="table-responsive">
                  <table class="table table-sm align-middle mb-0">
                    <tbody>
                      <tr>
                        <th class="ps-0" scope="row">Nama</th>
                        <td class="text-muted text-end"><?= $biodata['nama'] ?></td>
                      </tr>
                      <tr>
                        <th class="ps-0" scope="row">NIM</th>
                        <td class="text-muted text-end"><?= $biodata['nim'] ?></td>
                      </tr>
                      <tr>
                        <th class="ps-0" scope="row">Jurusan</th>
                        <td class="text-muted text-end"><?= $biodata['nama_jurusan'] ?></td>
                      </tr>
                      <tr>
                        <th class="ps-0" scope="row">Alamat</th>
                        <td class="text-muted text-end"><?= $biodata['alamat'] ?></td>
                      </tr>
                      <tr>
                        <th class="ps-0" scope="row">No. Telpon</th>
                        <td class="text-muted text-end"><?= $biodata['no_telpon'] ?></td>
                      </tr>
                      <tr>
                        <th class="ps-0" scope="row">Website</th>
                        <td class="text-muted text-end"><a href="https://septiabudiws.site/"
                            target="_blank">septiabudiws.site</a></td>
                      </tr>
                      <tr>
                        <th>Social Media</th>
                        <td>
                          <div class="d-flex flex-wrap justify-content-end gap-2">
                            <a href="https://github.com/septiabudiws" target="_blank" class="avatar-xs d-block">
                              <span class="avatar-title rounded-circle bg-secondary-subtle text-dark">
                                <i class="bi bi-github"></i>
                              </span>
                            </a>
                            <a href="https://www.youtube.com/c/SeptiabudiWS" target="_blank" class="avatar-xs d-block">
                              <span class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                <i class="bi bi-youtube"></i>
                              </span>
                            </a>
                            <a href="https://www.instagram.com/septiabudi.ws/" target="_blank" class="avatar-xs d-block">
                              <span class="avatar-title rounded-circle bg-danger-subtle text-danger">
                                <i class="bi bi-instagram"></i>
                              </span>
                            </a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                  </div>
                </div>
                <!--end card-body-->
              </div><!-- end card -->
            </div>
            <!--end tab-pane-->
          </div>

        </div><!--end col-->
      </div><!--end row-->

    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  <?= $this->endSection() ?>
