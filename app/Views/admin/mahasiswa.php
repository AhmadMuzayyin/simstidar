<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-sm-12">
        <div class="card card-teal shadow-sm">
          <div class="card-header">
            <h3 class="card-title">Data <?=$title?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#import">
                <i class="fas fa-download"></i> Import <?= $title?>
              </button>
              <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#add">
                <i class="fas fa-plus"></i> Tambah <?= $title?>
              </button>
            </div>
              <!-- /.card-tools -->
          </div>
            <!-- /.card-header -->
            
          <div class="card-body table-responsive">
              <table id="example1" class="table table-hover">              
                  <thead>
                    <tr >
                      <th width="40px" >NO</th>
                      <th >NIM</th>
                      <th >NAMA MAHASISWA</th>
                      <th >ALAMAT</th>
                      <th >AYAH</th>
                      <th >IBU</th>
                      <th >PRODI</th>
                      <th >ANGKATAN</th>
                      <th >AKSI</th>


                    </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1;
                      foreach ($mahasiswa as $key => $value) { ?>
                    <tr >
                      <td><?= $no++; ?></td>
                      <td><?= $value['nim'] ?></td>
                      <td><?= $value['nama_mhs'] ?></td>
                      <td><?= $value['kelurahan'] ?></td>
                      <td><?= $value['nama_ayah'] ?></td>
                      <td><?= $value['nama_ibu'] ?></td>
                      <td><?= $value['kode_prodi'] ?></td>
                      <td><?= $value['angkatan'] ?></td>
                      <td>
                          <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit<?= $value['id_mhs'] ?>"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?= $value['id_mhs'] ?>"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                        <?php } ?>


                  </tbody>
              </table>
          </div>
            <!-- /.card-body -->

          
        </div>
          <!-- /.card -->
      </div>
    </div>
  </div>
</div>

<!-- Tampilan Modal Add -->
<div class="modal fade" id="add">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah <?=$title?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <div class="modal-body">
              <?php 
                echo form_open('Mahasiswa/add');
              ?>
            <!-- Tampilan card Tab -->
            <div class="card card-success card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-biodata-tab" data-toggle="pill" href="#custom-tabs-one-biodata" role="tab" aria-controls="custom-tabs-one-biodata" aria-selected="true">Biodata</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-alamat-tab" data-toggle="pill" href="#custom-tabs-one-alamat" role="tab" aria-controls="custom-tabs-one-alamat" aria-selected="false">Alamat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-orangtua-tab" data-toggle="pill" href="#custom-tabs-one-orangtua" role="tab" aria-controls="custom-tabs-one-orangtua" aria-selected="false">Oang Tua</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-akademik-tab" data-toggle="pill" href="#custom-tabs-one-akademik" role="tab" aria-controls="custom-tabs-one-akademik" aria-selected="false">Akademik</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-biodata" role="tabpanel" aria-labelledby="custom-tabs-one-biodata-tab">
                  <div class="row">

                    <div class="form-group col-sm-6">
                      <label>NIM</label>
                      <input name="nim" class="form-control" placeholder="NIM">
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Nama Mahasiswa</label>
                      <input name="nama_mhs" class="form-control" placeholder="Nama Mahasiswa">
                    </div>
                    <div class="form-group col-sm-6">
                      <div>
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="icheck-success d-inline col-sm-3">
                        <input type="radio" name="jk" value="L" id="radioSuccess1">
                        <label for="radioSuccess1">Lak-Laki
                        </label>
                      </div>
                      <div class="icheck-success d-inline col-sm-3">
                        <input type="radio" name="jk" value="P" id="radioSuccess2">
                        <label for="radioSuccess2">Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Tempat Lahir</label>
                      <input name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" >
                    </div>

                    <div class="form-group col-sm-6">
                      <label>Tanggal Lahir</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                          </div>
                          <input id="datemask" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                      <label>NIK</label>
                      <input name="nik" class="form-control" placeholder="NIK" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Nomor HP</label>
                      <input name="no_hp" class="form-control" placeholder="Nomor HP" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email" >
                    </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-alamat" role="tabpanel" aria-labelledby="custom-tabs-one-alamat-tab">
                  <div class="row">

                    <div class="form-group col-sm-6">
                      <label>Alamat</label>
                      <input name="alamat" class="form-control" placeholder="Alamat" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>RT/RW</label>
                      <input name="rt_rw" class="form-control" placeholder="RT/RW" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Provinsi</label>
                      <input name="provinsi" class="form-control" placeholder="Provinsi" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Kabupaten</label>
                      <input name="kabupaten" class="form-control" placeholder="Kabupaten" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Kecamatan</label>
                      <input name="kecamatan" class="form-control" placeholder="Kecamatan" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Kelurahan</label>
                      <input name="kelurahan" class="form-control" placeholder="Kelurahan" >
                    </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-orangtua" role="tabpanel" aria-labelledby="custom-tabs-one-orangtua-tab">
                    <div class="row">

                    <div class="form-group col-sm-6">
                      <label>Nama Ayah</label>
                      <input name="nama_ayah" class="form-control" placeholder="Nama Ayah" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Alamat Ayah</label>
                      <input name="alamat_ayah" class="form-control" placeholder="Alamat Ayah" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Pendidikan Ayah</label>
                      <input name="pendidikan_ayah" class="form-control" placeholder="Pendidikan Ayah" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Pekerjaan Ayah</label>
                      <input name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Penghasilan Ayah</label>
                      <input name="penghasilan_ayah" class="form-control" placeholder="Penghasilan Ayah" >
                    </div>
                    <div></div>
                    <div class="form-group col-sm-6">
                      <label>Nama Ibu</label>
                      <input name="nama_ibu" class="form-control" placeholder="Nama Ibu" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Alamat Ibu</label>
                      <input name="alamat_ibu" class="form-control" placeholder="Alamat Ibu" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Pendidikan Ibu</label>
                      <input name="pendidikan_ibu" class="form-control" placeholder="Pendidikan Ibu" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Pekerjaan Ibu</label>
                      <input name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" >
                    </div>
                    <div class="form-group col-sm-4">
                      <label>Penghasilan Ibu</label>
                      <input name="penghasilan_ibu" class="form-control" placeholder="Penghasilan Ibu" >
                    </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-akademik" role="tabpanel" aria-labelledby="custom-tabs-one-akademik-tab">
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label>Program Studi</label>
                      <input name="id_prodi" class="form-control" placeholder="Program Studi" >
                    </div>
                    <div class="form-group col-sm-6">
                      <label>Tahun Masuk</label>
                      <input name="angkatan" class="form-control" placeholder="Tahun Masuk" >
                    </div>
                    <div class="modal-footer justify-content-right col-sm-12">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
              <!-- /.card -->

        <?php echo form_close() ?>
    </div>
          <!-- /.modal-content -->
  </div>
        <!-- /.modal-dialog -->
</div>
  <!-- /.modal -->

<!-- Tampilan Modal Edit -->
    <?php foreach ($mahasiswa as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value['id_mhs'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?=$title?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open('Mahasiswa/edit/' . $value['id_mhs']);
              ?>
            <!-- Tampilan card Tab -->
            <div class="card card-success card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-biodata-tab" data-toggle="pill" href="#custom-tabs-two-biodata" role="tab" aria-controls="custom-tabs-two-biodata" aria-selected="true">Biodata</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-alamat-tab" data-toggle="pill" href="#custom-tabs-two-alamat" role="tab" aria-controls="custom-tabs-two-alamat" aria-selected="false">Alamat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-orangtua-tab" data-toggle="pill" href="#custom-tabs-two-orangtua" role="tab" aria-controls="custom-tabs-two-orangtua" aria-selected="false">Oang Tua</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-two-akademik-tab" data-toggle="pill" href="#custom-tabs-two-akademik" role="tab" aria-controls="custom-tabs-two-akademik" aria-selected="false">Akademik</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">

                  <div class="tab-pane fade show active" id="custom-tabs-two-biodata" role="tabpanel" aria-labelledby="custom-tabs-two-biodata-tab">
                    <div class="row">

                      <div class="form-group col-sm-6">
                        <label>NIM</label>
                        <input name="nim"  value="<?= $value['nim'] ?>" class="form-control" placeholder="NIM">
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mhs"  value="<?= $value['nama_mhs'] ?>" class="form-control" placeholder="Nama Mahasiswa">
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Jenis Kelamin</label>
                        <div>
                          <div class="icheck-success d-inline col-sm-3">
                            <input type="radio" name="jk" value="L" id="radioSuccess1" 
                            <?php if($value['jk'] == 'L') { echo 'checked'; }?>>
                            <label for="radioSuccess1">Lak-Laki
                            </label>
                          </div>
                          <div class="icheck-success d-inline col-sm-3">
                            <input type="radio" name="jk" value="P" id="radioSuccess2" 
                            <?php if($value['jk'] == 'P') { echo 'checked'; }?>>
                            <label for="radioSuccess2">Perempuan
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Tempat Lahir</label>
                        <input name="tempat_lahir"  value="<?= $value['tempat_lahir'] ?>" class="form-control" placeholder="Tempat Lahir" >
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Tanggal Lahir</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input id="datemask" type="text" value="<?= $value['tgl_lahir'] ?>" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                          </div>
                      </div>

                      <div class="form-group col-sm-6">
                        <label>NIK</label>
                        <input name="nik"  value="<?= $value['nik'] ?>" class="form-control" placeholder="NIK" >
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Nomor HP</label>
                        <input name="no_hp"  value="<?= $value['no_hp'] ?>" class="form-control" placeholder="Nomor HP" >
                      </div>

                      <div class="form-group col-sm-6">
                        <label>Email</label>
                        <input name="email"  value="<?= $value['email'] ?>" class="form-control" placeholder="Email" >
                      </div>

                    </div>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-two-alamat" role="tabpanel" aria-labelledby="custom-tabs-two-alamat-tab">
                    <div class="row">

                      <div class="form-group col-sm-6">
                        <label>Alamat</label>
                        <input name="alamat"  value="<?= $value['alamat'] ?>" class="form-control" placeholder="Alamat" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>RT/RW</label>
                        <input name="rt_rw"  value="<?= $value['rt_rw'] ?>" class="form-control" placeholder="RT/RW" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Provinsi</label>
                        <input name="provinsi"  value="<?= $value['provinsi'] ?>" class="form-control" placeholder="Provinsi" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Kabupaten</label>
                        <input name="kabupaten"  value="<?= $value['kabupaten'] ?>" class="form-control" placeholder="Kabupaten" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Kecamatan</label>
                        <input name="kecamatan"  value="<?= $value['kecamatan'] ?>" class="form-control" placeholder="Kecamatan" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Kelurahan</label>
                        <input name="kelurahan"  value="<?= $value['kelurahan'] ?>" class="form-control" placeholder="Kelurahan" >
                      </div>

                    </div>
                  </div>


                  <div class="tab-pane fade" id="custom-tabs-two-orangtua" role="tabpanel" aria-labelledby="custom-tabs-two-orangtua-tab">
                    <div class="row">

                      <div class="form-group col-sm-6">
                        <label>Nama Ayah</label>
                        <input name="nama_ayah"  value="<?= $value['nama_ayah'] ?>" class="form-control" placeholder="Nama Ayah" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Alamat Ayah</label>
                        <input name="alamat_ayah"  value="<?= $value['alamat_ayah'] ?>" class="form-control" placeholder="Alamat Ayah" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Pendidikan Ayah</label>
                        <input name="pendidikan_ayah"  value="<?= $value['pendidikan_ayah'] ?>" class="form-control" placeholder="Pendidikan Ayah" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Pekerjaan Ayah</label>
                        <input name="pekerjaan_ayah"  value="<?= $value['pekerjaan_ayah'] ?>" class="form-control" placeholder="Pekerjaan Ayah" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Penghasilan Ayah</label>
                        <input name="penghasilan_ayah"  value="<?= $value['penghasilan_ayah'] ?>" class="form-control" placeholder="Penghasilan Ayah" >
                      </div>
                      <div></div>
                      <div class="form-group col-sm-6">
                        <label>Nama Ibu</label>
                        <input name="nama_ibu"  value="<?= $value['nama_ibu'] ?>" class="form-control" placeholder="Nama Ibu" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Alamat Ibu</label>
                        <input name="alamat_ibu" value="<?= $value['alamat_ibu'] ?>" class="form-control" placeholder="Alamat Ibu" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Pendidikan Ibu</label>
                        <input name="pendidikan_ibu"  value="<?= $value['pendidikan_ibu'] ?>" class="form-control" placeholder="Pendidikan Ibu" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Pekerjaan Ibu</label>
                        <input name="pekerjaan_ibu"  value="<?= $value['pekerjaan_ibu'] ?>" class="form-control" placeholder="Pekerjaan Ibu" >
                      </div>
                      <div class="form-group col-sm-4">
                        <label>Penghasilan Ibu</label>
                        <input name="penghasilan_ibu"  value="<?= $value['penghasilan_ibu'] ?>" class="form-control" placeholder="Penghasilan Ibu" >
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="custom-tabs-two-akademik" role="tabpanel" aria-labelledby="custom-tabs-two-akademik-tab">
                    <div class="row">
                      <div class="form-group col-sm-6">
                        <label>Program Studi</label>
                        <input name="id_prodi"  value="<?= $value['id_prodi'] ?>" class="form-control" placeholder="Program Studi" >
                      </div>
                      <div class="form-group col-sm-6">
                        <label>Tahun Masuk</label>
                        <input name="angkatan"  value="<?= $value['angkatan'] ?>" class="form-control" placeholder="Tahun Masuk" >
                      </div>
                      <div class="modal-footer justify-content-right col-sm-12">
                        <button type="submit" class="btn btn-success">Perbarui</button>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <!-- /.card -->
      <?php echo form_close() ?>
    </div>
      <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
</div>
 <?php } ?>
    <!-- /.modal -->

<!-- Tampilan Modal Delete -->
    <?php foreach ($mahasiswa as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value['id_mhs'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus <?=$title?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus <b><?= $value['nama_mhs'] ?> ?</b>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
              <a href="<?= base_url('mahasiswa/delete/' . $value['id_mhs']) ?>" class="btn btn-danger">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>
<!-- /.modal -->

<!-- Tampilan Modal Import -->
<div class="modal fade" id="import">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Import <?=$title?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php 
                echo form_open_multipart('mahasiswa/upload');
              ?>
                <div class="form-group">
                  <label>Import File</label>
                  <input type="file" name="fileimport" class="form-control">
                </div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool bg-success">
                    <a class="fas fa-download" href="<?php echo base_url()?>/assets/ImportMahasiswa.xlsx"> Download Template</a>    
                    </button>
                  </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success">Upload</button>
            </div>
              <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


