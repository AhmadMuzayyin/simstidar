<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <h1 class="text-teal">
            <a href="<?= base_url('presensi')?>"><?= $title ?></a>
          </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


<!-- Main content -->

<div class="content">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body p-2">
            <table >
              <tr>
                <th width="140px">Mata Kuliah</th>
                <td width="20px">:</td>
                <td><?= $kelas['matkul'] ?></td>
              </tr>
              <tr>
                <th width="140px">Program Studi</th>
                <td width="20px">:</td>
                <td><?= $kelas['prodi'] ?> ( <?= $kelas['kode_prodi'] ?> )</td>
              </tr>
              <tr>
                <th >Periode</th>
                <td>:</td>
                <td><?= $kelas['ta'] ?> <?= $kelas['semester'] ?></td>
              </tr>
              <tr>
                <th>Jumlah Anggota</th>
                <td>:</td>
                <td><?=$jml?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-sm-12">
        <div class="card card-teal shadow-sm">
          <div class="card-header">
            <h3 class="card-title">Anggota Kelas</h3>

            <div class="card-tools">
            <?=
            form_open('presensi/isi_presensi_kelas/'.$kelas['id_kelas']);
            ?>
            <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-save"></i> Simpan Presensi</button>
            </div>
              <!-- /.card-tools -->
          </div>
            <!-- /.card-header -->

            <div class="card-body table-responsive">
              <table class="table table-bordered table-striped table-sm">              
                    <tr class="bg-teal text-center">
                      <th rowspan="2" class="align-middle">No</th>
                      <th rowspan="2" class="align-middle">NIM</th>
                      <th rowspan="2" class="align-middle">Nama Mahasiswa</th>
                        <?php foreach ($anggotakelas as $key => $value) {?>
                        <?php } ?>
                      <th colspan="14">Pertemuan
                        <input id="jml_pertemuan" type="text" name="jml_pertemuan" 
                        value="<?php if ($value['jml_pertemuan'] == NULL) {?>  <?php } else { ?>
                        <?=$value['jml_pertemuan']?><?php }?> "></input>
                      </th>
                      
                      <th rowspan="2" class="align-middle"> % </th>

                    </tr>
                    <tr class="bg-teal">
                      <td class="text-center">1</td>
                      <td class="text-center">2</td>
                      <td class="text-center">3</td>
                      <td class="text-center">4</td>
                      <td class="text-center">5</td>
                      <td class="text-center">6</td>
                      <td class="text-center">7</td>
                      <td class="text-center">8</td>
                      <td class="text-center">9</td>
                      <td class="text-center">10</td>
                      <td class="text-center">11</td>
                      <td class="text-center">12</td>
                      <td class="text-center">13</td>
                      <td class="text-center">14</td>
                    </tr>
                  <?php $no = 1;
                    foreach ($anggotakelas as $key => $value) { 
                      echo form_hidden ($value['id_anggota_kelas'] . 'id_anggota_kelas', $value['id_anggota_kelas']);
                      ?>

                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $value['nim'] ?></td>
                        <td><?= $value['nama_mhs'] ?></td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p1" >
                            <option value="2" <?php if ($value['p1'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p1'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p1'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p2" >
                            <option value="2" <?php if ($value['p2'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p2'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p2'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p3" >
                            <option value="2" <?php if ($value['p3'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p3'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p3'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p4" >
                            <option value="2" <?php if ($value['p4'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p4'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p4'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p5" >
                            <option value="2" <?php if ($value['p5'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p5'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p5'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p6" >
                            <option value="2" <?php if ($value['p6'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p6'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p6'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p7" >
                            <option value="2" <?php if ($value['p7'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p7'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p7'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p8" >
                            <option value="2" <?php if ($value['p8'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p8'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p8'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p9" >
                            <option value="2" <?php if ($value['p9'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p9'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p9'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p10" >
                            <option value="2" <?php if ($value['p10'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p10'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p10'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p11" >
                            <option value="2" <?php if ($value['p11'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p11'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p11'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p12" >
                            <option value="2" <?php if ($value['p12'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p12'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p12'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p13" >
                            <option value="2" <?php if ($value['p13'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p13'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p13'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center">
                          <select name="<?= $value['id_anggota_kelas'] ?>p14" >
                            <option value="2" <?php if ($value['p14'] == '2') { echo 'selected';} ?>>
                              H
                            </option>
                            <option value="1" <?php if ($value['p14'] == '1') { echo 'selected'; } ?>>
                              I
                            </option>
                            <option value="0" <?php if ($value['p14'] == '0') { echo 'selected';} ?>>
                              A
                            </option>
                          </select> 
                        </td>
                        <td class="text-center" >
                          <?php 
                            $pertemuan = $value['jml_pertemuan'] * 2;
                            if ( $pertemuan !== 0) {
                              $presensi = ($value['p1'] + 
                                          $value['p2'] + 
                                          $value['p3'] + 
                                          $value['p4'] + 
                                          $value['p5'] + 
                                          $value['p6'] + 
                                          $value['p7'] + 
                                          $value['p8'] + 
                                          $value['p9'] + 
                                          $value['p10'] + 
                                          $value['p11'] + 
                                          $value['p12'] + 
                                          $value['p13'] + 
                                          $value['p14']) / $pertemuan * 100;
                                          echo number_format($presensi, 0);
                            } ?>                           
                        </td>
                        
                    </tr>

                    <?php } ?>
                    <?= form_close() ?>

              </table>
          </div>
            <!-- /.card-body -->
          
        </div>
          <!-- /.card -->
      </div>
    </div>
  </div>
</div>
