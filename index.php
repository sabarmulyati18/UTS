<?php include_once 'dbconfig.php'; ?>
<?php include_once 'header.php'; ?>

<?php
if(isset($_GET['sukses'])){
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Data berhasil di simpan!
        </div>
    </div>
    <?php
}
else if(isset($_GET['suksesedit'])){
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Data berhasil di edit!
        </div>
    </div>
    <?php
}
else if(isset($_GET['dihapus'])){
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Data berhasil di hapus!
        </div>
    </div>
    <?php
}
else if(isset($_GET['suksesedittanggal'])){
    ?>
    <div class="container">
        <div class="alert alert-success" role="alert">
            Tanggal Data berhasil di edit!
        </div>
    </div>
    <?php
}else if(isset($_GET['gagal'])){
    ?>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Terjadi kesalahan, data gagal disimpan!
        </div>
    </div>
    <?php
}
else if(isset($_GET['lebih'])){
    ?>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Jumlah tidak sesuai, data tidak disimpan!
        </div>
    </div>
    <?php
}
if($_SESSION['sesi_id'] != null) {
    ?>
    <div class="container">
        <a href="add-data.php" class="btn btn-large btn-info"><i class="fa fa-plus"></i> Tambah Provinsi</a>
        <a href="edit-tanggal.php" class="btn btn-large btn-info"><i class="fa fa-edit"></i> Ubah Tanggal Data</a>
    </div>
    <?php
} ?>
<?php
    $positif = $crud->positif();
    $sembuh = $crud->sembuh();
    $meninggal = $crud->meninggal();
    $tanggal = $crud->tanggal();
?>
<br>
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Positif</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php foreach ($positif as $x){
                        echo $x;
                    }?></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Total Kasus Positif di Semua Provinsi</li>
                </ul>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Total Sembuh</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php foreach ($sembuh as $x){
                        echo $x;
                    }?></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Total Kasus Sembuh di Semua Provinsi</li>
                </ul>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Total Meninggal</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><?php foreach ($meninggal as $x){
                        echo $x;
                    }?></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Total Kasus Meninggal di Semua Provinsi</li>
                </ul>
            </div>
        </div>
    </div>
    <a>Data pada Tanggal : <?php foreach ($tanggal as $x){
            echo $x;
        }?></a><br><br>
    <div class="table-responsive-xl">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Provinsi </th>
                <th>Kasus Positif</th>
                <th>Proses Penyembuhan</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                <?php
                if($_SESSION['sesi_id'] != null) {
                    ?>
                    <div class="container">
                        <th>Aksi</th>
                    </div>
                <?php } ?>
            </tr>
            </thead>
            <?php
            $crud->dataview("SELECT * FROM covid ORDER BY nama_provinsi ASC");
            ?>
        </table>
    </div>
</div>
<?php include_once 'footer.php'; ?>
