<?php
require "koneksi.php";
?>
<html>
<head>
<title>Belajar Bootstrap</title>
<link href="template/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
 <br>
 <div class="row">
  <div class="col-md-12">
   <table width="100%" class="table table-bordered table-striped table-hover">
    <tr>
     <th>id</th>
     <th>category_name</th>
     <th>products</th>
     </tr>
    <?php
    $no = 1;
    $query = "SELECT * FROM products";
    $result = mysqli_query($db, $query);
    foreach($result as $data) {
     ?>
     <tr>
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['category_id']; ?></td>
      <td><?php echo $data['name']; ?></td>
     </tr>
    <?php
    $no++;
    }
    ?>
   </table>
  </div>
 </div>
</div>
</body>
<script src="template/js/bootstrap.min.js"></script>
</html>