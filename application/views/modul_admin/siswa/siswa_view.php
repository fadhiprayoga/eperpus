<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/DataTables-1.10.18/css/jquery.dataTables.min.css"/>

<h1>
  Master Siswa
    <small>Daftar Siswa</small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
  </li>
  <li class="active">Master Siswa</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
            <!---------------------->
            <div>
            <div style="text-align:left;">
                <a class="btn btn-primary" role="button" href="<?php echo base_url(); ?>index.php/admin/menu/siswa" style="margin-right:9px;"><i class="fa fa-list"></i> Daftar Siswa</a>
                <a class="btn btn-primary" role="button" href="<?php echo base_url(); ?>index.php/admin/siswa/siswaAdd"><i class="icon ion-person-add"></i> Tambah Siswa</a>
            </div>
    <div class="table-responsive" style="margin-top:23px;">
        <table id="table_siswa" class="">
            <thead>
                <tr>
                    <th style="width:184px;text-align:center;">NIM</th>
                    <th>Nama</th>
                    <th style="width:99px;text-align:center;">Sunting</th>
                    <th style="width:99px;text-align:center;">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;">14.12.0102</td>
                    <td>Fandhi Dhuga Prayoga</td>
                    <td style="text-align:center;"><a class="btn btn-primary" role="button" id="btneditsiswa" href="#"><i class="icon ion-edit"></i></a></td>
                    <td style="text-align:center;"><button class="btn btn-danger" type="button" id="btnhapussiswa"><i class="icon ion-android-remove-circle"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            <!---------------------->       
        </div>
       </div>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

    <script>
   
        $(document).ready( function () {
            $('#table_siswa').DataTable({ordering:  false});
        } );

        $(document).on('click', '#btneditsiswa', function(){ 
            // Your Code
            window.location.href = "<?php echo base_url();?>index.php/admin/siswa/siswaEdit";
        });

        $(document).on('click', '#btnhapussiswa', function(){ 
            // Your Code
            alert('Ini fungsi Hapus siswa');
        });
    </script>
      <!-- /.row -->
    </section>
