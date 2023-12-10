<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="produk.form.php?&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "db_rental");
      $result = $mysqli->query("SELECT * from produk");
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th>ACTION</th>
        </tr>  
   <?php
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row['id_produk'];
    echo "</td>";
    echo "<td>";
    echo $row['nama_produk'];
    echo "</td>";
    echo "<td>";
    echo $row['harga'];
    echo "</td>";
    echo "<td>"; // Add this line to fix the missing opening <td> tag for the "stok" column
    echo $row['stok'];
    echo "</td>";
    echo "<td>";
    echo "<a class='btn btn-primary me-md-2 btn-sm' href='produk.form.php?&id_produk=".$row['id_produk']."&action=edit'>Edit</a>";
    echo "<a class='btn btn-danger me-md-2 btn-sm' href='produk.action.php?id_produk=".$row['id_produk']."&action=delete'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}
?>

    </table>

