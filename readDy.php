<?php

include_once './config/db.php';

$sql = "SELECT * FROM persons";
$result = mysqli_query($conn, $sql);
?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="container mt-5">
<table class="table table-striped table-bordered table-hover" id="example">
  
<thead>
    <th>name</th>
    <th>address</th>
  </thead>
  
<?php        
                            
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["address"] ?></td>
    </tr>
    <?php
    /*echo "id: " . $row["CustomerID"]. " - Customer Name: " . $row["CustomerName"]. " - Contact Name: " . $row["ContactName"]. "-District Name: " . $row["District"] . "<br>"; */
  }
} else {
  echo "0 results";
}
?>

</table>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable({
        columns: [
            { data: 'name' },
            { data: 'address' },
        ],
    });
});
</script>

<?php
// mysqli_close($conn);
