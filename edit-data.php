<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-edit'])){
    $id = $_POST['id'];
    $namaprovinsi = $_POST['nama_provinsi'];
    $positif = $_POST['positif'];
    $sembuh = $_POST['sembuh'];
    $meninggal = $_POST['meninggal'];
    if($sembuh > $positif || $meninggal > $positif || ($meninggal+$sembuh) > $positif){
        header("Location: index.php?lebih");
    }
    else if($crud->update($id,$namaprovinsi,$positif,$sembuh,$meninggal)){
        header("Location: index.php?suksesedit");
    }else{
        header("Location: index.php?gagal");
    }}
?>

<?php
if(isset($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    extract($crud->getID($id));
}
?>

<?php include_once 'header.php'; ?>

<div class="container">
    <?php
    if(isset($msg))
    {
        echo $msg;
    }
    ?>
</div>
<div class="container">
    <div class="py-5 text-center">
        <h2>Edit Data</h2>
        <p class="lead">Edit data kasus covid-19 di provinsi di Indonesia</p>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-2 mb-4">
            <form id="formedit" method="post">
                <div class="form-group">
                    <input name="id" value="<?php echo $id; ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Provinsi</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="namahelp" name="nama_provinsi" value="<?php echo $nama_provinsi; ?>">
                    <small id="namahelp" class="form-text text-muted">Nama Provinsi yang terkena kasus covid-19</small>
                </div>
                <div class="form-group">
                    <label for="positif">Jumlah Kasus Postif</label>
                    <input type="number" class="form-control" id="positif" aria-describedby="positifhelp" name="positif" value="<?php echo $positif; ?>">
                    <small id="positifhelp" class="form-text text-muted">Jumlah kasus positif di provinsi tersebut karena covid-19</small>
                </div>
                <div class="form-group">
                    <label for="sembuh">Jumlah Sembuh</label>
                    <input type="number" class="form-control" id="sembuh" aria-describedby="sembuhhelp" name="sembuh" value="<?php echo $sembuh; ?>">
                    <small id="sembuhhelp" class="form-text text-muted">Jumlah kasus sembuh di provinsi tersebut dari covid-19</small>
                </div>
                <div class="form-group">
                    <label for="meninggal">Jumlah Meninggal</label>
                    <input type="number" class="form-control" id="meninggal" aria-describedby="meninggalhelp" name="meninggal" value="<?php echo $meninggal; ?>">
                    <small id="meninggalhelp" class="form-text text-muted">Jumlah kasus meninggal di provinsi tersebut karena covid-19</small>
                </div>
                <button type="submit" class="btn btn-primary" name="btn-edit"><i class="fa fa-save"></i> Simpan</button>
                <a href="index.php" class="btn btn-danger"><i class="fa fa-sign-out"></i> Batal</a>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'admin.php';
include_once 'footer.php'; ?>
