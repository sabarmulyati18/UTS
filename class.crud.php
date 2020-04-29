<?php

class crud
{
	private $db;

	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}

	public function create($namaprovinsi,$positif,$sembuh,$meninggal)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO covid(nama_provinsi,positif,sembuh,meninggal) VALUES(:namaprovinsi, :positif, :sembuh, :meninggal)");
			$stmt->bindparam(":namaprovinsi",$namaprovinsi);
			$stmt->bindparam(":positif",$positif);
			$stmt->bindparam(":sembuh",$sembuh);
			$stmt->bindparam(":meninggal",$meninggal);
			return $stmt->execute();
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM covid WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

    public function positif()
    {
        $stmt = $this->db->prepare("SELECT SUM(positif)FROM covid;");
        $stmt->execute();
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function sembuh()
    {
        $stmt = $this->db->prepare("SELECT SUM(sembuh)FROM covid;");
        $stmt->execute();
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function meninggal()
    {
        $stmt = $this->db->prepare("SELECT SUM(meninggal)FROM covid;");
        $stmt->execute();
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function tanggal()
    {
        $stmt = $this->db->prepare("SELECT * FROM updatetanggal;");
        $stmt->execute();
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

	public function update($id,$namaprovinsi,$positif,$sembuh,$meninggal)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE covid SET nama_provinsi=:namaprovinsi, positif=:positif, sembuh=:sembuh, meninggal=:meninggal WHERE id=:id ");
			$stmt->bindparam(":namaprovinsi",$namaprovinsi);
			$stmt->bindparam(":positif",$positif);
			$stmt->bindparam(":sembuh",$sembuh);
			$stmt->bindparam(":meninggal",$meninggal);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
    public function updatetanggal($tanggal)
    {
        try
        {
            $stmt=$this->db->prepare("UPDATE updatetanggal SET tanggal=:tanggal");
            $stmt->bindparam(":tanggal",$tanggal);
            $stmt->execute();
            return true;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }

	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM covid WHERE id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}



	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		if($stmt->rowCount() > 0)
		{
		    $i = 1;
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tbody>
                    <tr>
                        <th scope="row"><?php print($i++); ?></th>
                        <td><?php print($row['nama_provinsi']); ?></td>
                        <td><?php print($row['positif']); ?></td>
                        <td><?php print($row['positif'] - $row['sembuh'] - $row['meninggal']); ?></td>
                        <td><?php print($row['sembuh']); ?></td>
                        <td><?php print($row['meninggal']); ?></td>
                        <?php
                        if($_SESSION['sesi_id'] != null) {
                            ?>
                            <td>
                                <a class="btn btn-primary" href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-danger" onClick="javascript:return confirm('Yakin ingin menghapus?');" href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        <?php } ?>
                    </tr>
                </tbody>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Tidak Ada Data</td>
            </tr>
            <?php
		}
	}
}
?>
