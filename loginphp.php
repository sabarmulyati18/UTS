<?php
$msg = "";
if(isset($_POST['BtnLogin'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($username != "" && $password != "") {
        try {
            $query = "select * from `pengguna` where `username`=:username and `password`=:password";
            $stmt = $DB_con->prepare($query);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
                $_SESSION['sesi_id']   = $row['id'];
                $_SESSION['sesi_namapengguna'] = $row['username'];
                $_SESSION['sesi_nama'] = $row['nama'];
                header("Location: index.php");
            } else {
                $pesan = "Nama Pengguna atau Kata Sandi Salah";
            }
        } catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    } else {
        $pesan = "Nama Pengguna dan Kata Sandi tidak boleh kosong";
    }
}
?>
