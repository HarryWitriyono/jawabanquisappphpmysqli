<?php $koderuko=$_GET['koderuko'];
         $kon=mysqli_connect("localhost","root","","simruko");
		 $sql="delete from ruko where koderuko='".$koderuko."'";
		 $q=mysqli_query($kon,$sql);
		 header('location:inputruko.php');
		 ?>