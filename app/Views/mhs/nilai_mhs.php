<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h1 
            class="m-0">
            <?= $title ?>
            <small> : <?= $ta_aktif['ta']?>-<?= $ta_aktif['semester']?></small>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<div class="content">
  <div class="container-fluid">
  </div>
</div>

<!-- Main content -->

<div class="content">
  <div class="container-fluid">
    <div class="row "> 
      <div class="col-sm-12">
        <div class="card card-teal shadow-sm">
          <div class="card-header">
            <h3 class="card-title"><?=$title?> </h3>
            <?php $mhs ?>
          </div>

            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table class="table table-head-fixed text-nowrap table-hover table-sm">              
                  <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th >Smt</th>
                      <th >Kelas</th>
                      <th >Kode Matkul</th>
                      <th >Mata Kuliah</th>
                      <th >SKS</th>
                      <th >Nilai Angka</th>
                      <th >Nilai Huruf</th>
                      <th >Bobot</th>
                      <th >Dosen</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    
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




