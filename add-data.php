<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save'])){
	$namaprovinsi = $_POST['nama_provinsi'];
	$positif = $_POST['positif'];
	$sembuh = $_POST['sembuh'];
	$meninggal = $_POST['meninggal'];
	if($sembuh > $positif || $meninggal > $positif || ($meninggal+$sembuh) > $positif){
        header("Location: index.php?lebih");
    }
	else if($crud->create($namaprovinsi,$positif,$sembuh,$meninggal)){
        header("Location: index.php?sukses");
    }else{
		header("Location: index.php?gagal");
	}}
?>

<?php include_once 'header.php'; ?>

<div class="container">
    <div class="py-5 text-center">
        <h2>Tambah Data</h2>
        <p class="lead">Tambah data kasus covid-19 di provinsi di Indonesia</p>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-2 mb-4">
            <form id="formtambah" method="post">
                <div class="form-group">
                    <label for="nama">Nama Provinsi</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="namahelp" name="nama_provinsi">
                    <small id="namahelp" class="form-text text-muted">Nama Provinsi yang terkena kasus covid-19</small>
                </div>
                <div class="form-group">
                    <label for="positif">Jumlah Kasus Postif</label>
                    <input type="number" class="form-control" id="positif" aria-describedby="positifhelp" name="positif">
                    <small id="positifhelp" class="form-text text-muted">Jumlah kasus positif di provinsi tersebut karena covid-19</small>
                </div>
                <div class="form-group">
                    <label for="sembuh">Jumlah Sembuh</label>
                    <input type="number" class="form-control" id="sembuh" aria-describedby="sembuhhelp" name="sembuh">
                    <small id="sembuhhelp" class="form-text text-muted">Jumlah kasus sembuh di provinsi tersebut dari covid-19</small>
                </div>
                <div class="form-group">
                    <label for="meninggal">Jumlah Meninggal</label>
                    <input type="number" class="form-control" id="meninggal" aria-describedby="meninggalhelp" name="meninggal">
                    <small id="meninggalhelp" class="form-text text-muted">Jumlah kasus meninggal di provinsi tersebut karena covid-19</small>
                </div>
                <button type="submit" class="btn btn-primary" name="btn-save"><i class="fa fa-save"></i> Simpan</button>
                <a href="index.php" class="btn btn-danger"><i class="fa fa-sign-out"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'admin.php';
include_once 'footer.php';
?>
