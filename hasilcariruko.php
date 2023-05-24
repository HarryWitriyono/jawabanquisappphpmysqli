<?php    if (isset($_POST['kCari'])) $koderuko=$_POST['kCari'];         $kon=mysqli_connect("localhost","root","","simruko");
		 $sql="select * from ruko where koderuko like '%".$koderuko."%'";
		 $q=mysqli_query($kon,$sql);
		 $r=mysqli_fetch_array($q);
   ?>
   <table>
    <thead>
    <tr>
	  <th>Kode Ruko</th>
	  <th>Nama Ruko</th>
	  <th>Aksi Rekord</th>
	</tr>
	</thead>
    <tbody><?php do { ?>
    <tr>
      <td><?php echo $r['koderuko'];?></td>
      <td><?php echo $r['namaruko'];?></td>
      <td><a href="koreksiruko.php?koderuko=<?php  echo $r['koderuko'];?>">Koreksi</a>
          <a href="hapusruko.php?koderuko=<?php  echo $r['koderuko'];?>" onclick="return confirm('Apakah yakin akan dihapus ?');">Hapus</a>
      </td>		  
	</tr> <?php }while($r=mysqli_fetch_array($q)); ?>
    </tbody>
   </table>	