<div class="main-panel w-100">
  <div class="content-wrapper w-100">
    <div class="row w-100">
      <div class="col-md-12 grid-margin">
        <div class="row w-100">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome Attiya Dianti Fadli</h3>
            <h6 class="font-weight-normal mb-0">Semua sistem berjalan dengan lancar! Anda memiliki <span class="text-primary">3 peringatan yang belum dibaca!</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white" type="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="mdi mdi-calendar"></i> Hari ini (17 Agustus 2024) </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row w-100">
      <div class="col-md-6 grid-margin stretch-card">
      <div class="card tale-bg">
        <div class="card-people mt-auto">
          <img src="<?php echo base_url()?>assets/backend/images/dashboard/people.svg" alt="people" class="w-100">
          <div class="weather-info">
            <div class="d-flex">
              <div>
                <h2 class="mb-0 font-weight-normal"><i class="icon-sun me-2"></i>30<sup>C</sup></h2>
              </div>
              <div class="ms-2">
                <h4 class="location font-weight-normal">Bengkulu</h4>
                <h6 class="font-weight-normal">Indonesia</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row w-100">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Data Admin</p>
              <p class="fs-30 mb-2"></p>
              <?php echo $admin ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row w-100">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-blue">
            <div class="card-body">
              <p class="mb-4">Data Karyawan</p>
              <p class="fs-30 mb-2"></p>
              <?php echo $karyawan ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Data Jabatan</p>
              <p class="fs-30 mb-2"></p>
              <?php echo $jabatan ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row w-100">
    <div class="col-md-20 stretch-card grid-margin">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Notifications</p>
          <ul class="icon-data-list">
          <li>
            <div class="d-flex">
              <img src="<?php echo base_url()?>assets/backend/images/faces/face1.jpg" alt="user">
                <div>
                  <p class="text-info mb-1">Isabella Becker</p>
                  <p class="mb-0">Dasbor penggajian telah dibuat</p>
                  <small>9:30 am</small>
                </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="<?php echo base_url()?>assets/backend/images/faces/face2.jpg" alt="user">
              <div>
                <p class="text-info mb-1">Adam Warren</p>
                <p class="mb-0">Anda telah melakukan pekerjaan dengan baik</p>
                <small>10:30 am</small>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex">
              <img src="<?php echo base_url()?>assets/backend/images/faces/face5.jpg" alt="user">
              <div>
                <p class="text-info mb-1">Ryan Cortez</p>
                <p class="mb-0">Coding itu menyenangkan dan mudah</p>
                <small>9:00 am</small>
              </div>
            </div>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Attiya template</a> from attiyadf36_. All rights reserved.</span>
  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
</div>
</footer>