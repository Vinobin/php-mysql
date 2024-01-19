<?php
$host="127.0.0.1";
$user="root";
$password="";
$db="db toko";
$koneksi=new mysqli($host, $user, $password, $db);
$sql="SELECT * FROM barang";
$hasil=mysqli_query($koneksi, $sql);
echo "<table border=2px>
<thead>
<th>
  id
</th>
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
    echo "<td>" . $row[0]. "</td>";
    echo "<td>" . $row[1]. "</td>";
    echo "<td>" . $row[2]. "</td>";
    echo "<td>" . $row[3]. "</td>";
    echo"</tr>";
}
echo "</tbody></table>";

$sql= "SELECT * FROM pelanggan";
$hasil=mysqli_query($koneksi, $sql);
echo "<table border=2px>
<thead>
<th>
id
</th>
    <th>
    pelanggan
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
    echo "<td>" . $row[0]. "</td>";
    echo "<td>" . $row[1]. "</td>";
    echo "<td>" . $row[2]. "</td>";
    echo "<td>" . $row[3]. "</td>";
    echo"</tr>";
}
echo "</tbody></table>";

?>