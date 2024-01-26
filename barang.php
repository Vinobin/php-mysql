<form action="" method="post">
    barang:
    <input type="text" name="barang" placeholder="nama barang">
    <br>
    harga:
    <input type="number" name="harga" placeholder="harga barang">
    <br>
    stok:
    <input type="number" name="stok" placeholder="jumlah stok">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="db toko";
$koneksi=new mysqli($host, $user, $password, $db);
if(isset($_POST['simpan'])){
      $barang=$_POST['barang'];
      $harga=$_POST['harga'];
      $stok=$_POST['stok'];
      
$sql="INSERT INTO barang (barang,harga,stok) VALUES ('$barang', $harga, $stok)";
$hasil=mysqli_query($koneksi, $sql);
}
$sql= "SELECT * FROM barang";
$hasil=mysqli_query($koneksi, $sql);
echo "<table border=2px>
<thead>
    <th>
    barang
    </th>
    <th>
    harga
    </th>
    <th>
    stok
    </th>
</thead>
<tbody>";
while($row=mysqli_fetch_array($hasil)){
    echo"<tr>";
    echo "<td>" . $row[1]. "</td>";
    echo "<td>" . $row[2]. "</td>";
    echo "<td>" . $row[3]. "</td>";
    echo"</tr>";
}
echo "</tbody></table>";

?>