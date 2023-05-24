<?php $koderuko=$_GET['koderuko'];
         $kon=mysqli_connect("localhost","root","","simruko");
		 $sql="select * from ruko where koderuko = '".$koderuko."'";
		 $q=mysqli_query($kon,$sql);
		 $r=mysqli_fetch_array($q);
   ?>
   <form method="post">
    <input type="text" name="koderuko" placeholder="Ketik kode ruko" value="<?php echo $r['koderuko'];?>">
	<input type="text" name="namaruko" placeholder="Ketik nama ruko baru" value="<?php echo $r['namaruko'];?>">
	<input type="submit" name="bSimpan" value="Simpan">
   </form>
   <?php 
    if (isset($_POST['bSimpan'])) {
       $koderuko=$_POST['koderuko'];
	   $namaruko=$_POST['namaruko'];
	   $sql="update ruko set namaruko='".$namaruko."' where koderuko='".$koderuko."'";
	   $q=mysqli_query($kon,$sql);
    header("location:inputruko.php");	
	}
   ?>