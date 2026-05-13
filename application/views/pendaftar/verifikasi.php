<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="<?= base_url() ?>assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h2><b>SPMB Tahun Ajaran 2025/2026</b></h2>
          </center>
          <br>
          <!-- font ganti jenis -->
        </div>
        <div class="col-md-3">
          <center><img style="margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>


  <div class="container-fluid">

    <div class="row">    
      <div class="row g-4 mb-3">

        <div class="col-12 ">
            <?= $this->session->flashdata('msg') ?>
            <!-- <a href="<?= site_url('pendaftar/upload_pengajuan') ?>" type="button" class="btn btn-info btn-sm mb-2">Upload Pengajuan Pendaftaran</a> -->
            <!-- <br><div class="btn-group" role="group" aria-label="Basic example">
                <a href="<?= site_url('pendaftar/') ?>" type="button" class="btn btn-primary btn-sm">Semua Jurusan</a>
                <a href="<?= site_url('pendaftar/akl') ?>" type="button" class="btn btn-primary btn-sm">AKL</a>
                <a href="<?= site_url('pendaftar/mplb') ?>" type="button" class="btn btn-primary btn-sm">MPLB</a>
                <a href="<?= site_url('pendaftar/tjkt') ?>" type="button" class="btn btn-primary btn-sm">TJKT</a>
                <a href="<?= site_url('pendaftar/pplg') ?>" type="button" class="btn btn-primary btn-sm">PPLG</a>
                <a href="<?= site_url('pendaftar/to') ?>" type="button" class="btn btn-primary btn-sm">TO</a>
                <a href="<?= site_url('pendaftar/tm') ?>" type="button" class="btn btn-primary btn-sm">TM</a>
            </div> -->
        </div><!-- end col -->
      </div><!-- end row -->
    
      <div class="col-12">
        <!-- <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100"> -->
        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
        <thead>
            <tr>
                <th><center>No</th>
                <th><center>Nama Lengkap</th>
                <!-- <th><center>Kompetensi Keahlian</th> -->
                <th><center>Asal Sekolah</th>
                <th><center>Status Verifikasi</th>
                <!-- <th><center>Tes Khusus</th>
                <th><center>Tes Wawncara</th> -->
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($tampil as $row) {
            ?>
            <tr>
                <td><center><?= $no++ ?></td>
                <td></p><?= $row->nama_siswa ?></td>
                <!-- <td><center><?= $row->short_kompetensi_1 ?></td> -->
                <td><center><?= $row->asal_sekolah ?></td>
                <td><center>
                      <?php if($row->status_verifikasi == 'Data Sesuai' ){ ?>
                            <a class="btn-success waves-effect waves-light btn-sm btn-sm btn-rounded">Setujui</a>
                      <?php }elseif($row->status_verifikasi == 'Proses'){ ?>
                            <a class="btn-info waves-effect waves-light btn-sm btn-sm btn-rounded">Diajukan</a>
                      <?php }elseif($row->status_verifikasi == 'Tidak Sesuai'){ ?>
                          <a class="btn-warning waves-effect waves-light btn-sm btn-sm btn-rounded">Revisi</a>
                      <?php }elseif($row->status_verifikasi == 'Tolak Permanen'){ ?>
                          <a class="btn-danger waves-effect waves-light btn-sm btn-sm btn-rounded">Ditolak Permanen</a>
                      <?php }else{ ?>
                          <a class="btn-secondary btn-sm btn-rounded">Kosong</a>
                      <?php } ?>
                  </td>
              
            </tr>
            <?php } ?>
        </tbody>
        
        </table>

      </div>

      <div class="col">
        <!-- kosong -->
    </div>
  </div>

</div>

