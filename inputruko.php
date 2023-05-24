<form name="frmcari" action="hasilcariruko.php" method="post">
    <input type="text" name="kCari" placeholder="Ketik kode dicari">
	<input type="submit" name="bCari" value="Cari">
   </form>
   <form name="frminput" method="post">
	<input type="text" name="namaruko" placeholder="Ketik nama ruko">
	<input type="submit" name="bSimpan" value="Simpan">
   </form>
   <?php
      if (isset($_POST['bSimpan'])) {
		$namaruko=$_POST['namaruko'];
		$sql="insert into ruko (namaruko) values ('".$namaruko."')";
		$kon=mysqli_connect("localhost","root","","simruko");
		$q=mysqli_query($kon,$sql);
	  }
   ?>