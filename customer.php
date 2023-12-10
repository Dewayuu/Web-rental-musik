<div class="d-grid gap-2 p-2 d-md-flex justify-content-md-end">
      <a class="btn btn-primary me-md-2" href="formcustomer.php?&action=add" role="button">Tambah</a>
    </div>
    
    <?php 
      $mysqli = new mysqli("localhost", "root", "", "db_rental");
      $result = $mysqli->query("SELECT * from pembeli");
    ?>
    <table class="table table-striped">
        <tr>
            <th>ID CUSTOMER</th>
            <th>NAMA CUSTOMER</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
            <th>ACTION</th>
        </tr>  
    <?php
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>";
        echo $row['id_pembeli'];
        echo "</td>";
        echo "<td>";
        echo $row['nama_pembeli'];
        echo "</td>";
        echo "<td>";
        echo $row['alamat_pembeli'];
        echo "</td>";
        echo "<td>";
        echo $row['email_pembeli'];
        echo "</td>";
        echo "<td>";
        echo "<a class='btn btn-primary me-md-2 btn-sm' href='formcustomer.php?id_pembeli=".$row['id_pembeli']."&action=edit'>Edit</a>";
        echo "<a class='btn btn-danger me-md-2 btn-sm' href='customer.action.php?id_pembeli=".$row['id_pembeli']."&action=delete'>Delete</a>";
        echo "</td>";
        
        echo "</tr>";
    }

    ?>
    </table>


