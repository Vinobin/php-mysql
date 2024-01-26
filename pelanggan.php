<form action="" method="post">
    pelanggan:
    <input type="text" name="namapelanggan" placeholder="nama pelanggan">
    <br>
    alamat:
    <input type="text" name="alamat" placeholder="alamat pelanggan">
    <br>
    telepon
    <input type="number" name="telepon" placeholder="nomor telepon">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="db toko";
$koneksi=new mysqli($host, $user, $password, $db);
if(isset($_POST["simpan"])){
      $namapelanggan=$_POST["namapelanggan"];
      $alamat=$_POST["alamat"];
      $telepon=$_POST["telepon"];
      
$sql="INSERT INTO pelanggan (namapelanggan,alamat,telepon) VALUES ('$namapelanggan', '$alamat', $telepon)";
$hasil=mysqli_query($koneksi, $sql);
}
$sql= "SELECT * FROM pelanggan";
$hasil=mysqli_query($koneksi, $sql);

echo "<table border=2px>
<thead>
    <th>
    namapelanggan
    </th>
    <th>
     alamat
    </th>
    <th>
    telepon
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