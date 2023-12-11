 <div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="penjualan.form.php?&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "alatmusik");
      $result = $mysqli->query("SELECT * from penjualan");
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID PENJUALAN</th>
            <th>ID CUSTOMER</th>
            <th>TANGGAL PENJUALAN</th>
        </tr>  
   <?php
foreach ($result as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row['id_penjualan'];
    echo "</td>";
    echo "<td>";
    echo $row['id_customer'];
    echo "</td>";
    echo "<td>";
    echo $row['tanggal_penjualan'];
    echo "</td>";
     echo "<a class='btn btn-primary me-md-2 btn-sm' href='penjualan.form.php?id_penjualan=".$row['id_penjualan']."&action=edit'>Edit</a>";
        echo "<a class='btn btn-danger me-md-2 btn-sm' href='penjualan.action.php?id_penjualan=".$row['id_penjualan']."&action=delete'>Delete</a>";
    echo "</td>";
    echo "</tr>";
}
?>

    </table>
