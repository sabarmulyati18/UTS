<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-edit'])){
    $tanggal = $_POST['tanggal'];
    if($crud->updatetanggal($tanggal)){
        header("Location: index.php?suksesedittanggal");
    }else{
        header("Location: index.php?gagal");
    }}
?>

<?php
$tanggal = $crud->tanggal();
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
        <h2>Edit Tanggal Data</h2>
        <p class="lead">Edit tanggal data kasus covid-19 di provinsi di Indonesia</p>
    </div>
    <div class="row">
        <div class="col-md-12 order-md-2 mb-4">
            <form method="post">
                <div class="form-group">
                    <input name="id" value="<?php echo $id; ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" aria-describedby="tanggalhelp" name="tanggal" value="<?php foreach ($tanggal as $x){
                        echo $x;
                    }?>">
                    <small id="tanggalhelp" class="form-text text-muted">Tanggal update data terakhir</small>
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
