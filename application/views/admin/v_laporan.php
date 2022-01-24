<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">LAPORAN MASUK</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Laporan terkini</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Hp</th>
                  <th>Judul Laporan</th>
                  <th>Isi Laporan</th>
                  <th>Lokasi kejadian</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <tfoot>
                <?php $no = 1; ?>
                <?php foreach ($laporan as $value) { ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value['nama']; ?></td>
                    <td><?= $value['email']; ?></td>
                    <td><?= $value['alamat']; ?></td>
                    <td><?= $value['hp']; ?></td>
                    <td><?= $value['judul_laporan']; ?></td>
                    <td><?= $value['isi_laporan']; ?></td>
                    <td><?= $value['lokasi_kejadian']; ?></td>
                    <td><?= $value['tgl']; ?></td>
                  </tr>
                <?php } ?>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- DataTales Example -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->