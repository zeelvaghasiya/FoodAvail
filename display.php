<!DOCTYPE html>
<html>

<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css"
    href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8"
    src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>

<body>

  <div class="container">
    
    <div class="col-lg-12">
      <br><br>
      
      <h1 class="text-dark text-center"> : Donor Info :  </h1>
      <br>
      <table id="tabledata" class=" table table-striped table-hover table-bordered">

        <tr class="bg-dark text-white text-center">

          <th> DNO </th>
          <th> Name </th>
          <th> Mo No </th>
          <th> Address </th>
          <th> Locality </th>
          <th> City </th>
          <th> Zip </th>
          <th> FCatagory </th>

        </tr>

        <?php

 include 'connection.php';
 
 $q = "select * from `donor details` ";

 $query = mysqli_query($conn,$q);
 
 $total = mysqli_num_rows($query);

 if($total != 0)
 {

 while($res = mysqli_fetch_assoc($query)){
 ?>
        <tr class="text-center">
          <td>
            <?php echo $res['dno'];  ?>
          </td>
          <td>
            <?php echo $res['name'];  ?>
          </td>
          <td>
            <?php echo $res['mono'];  ?>
          </td>
          <td>
            <?php echo $res['address'];  ?>
          </td>
          <td>
            <?php echo $res['locality'];  ?>
          </td>
          <td>
            <?php echo $res['city'];  ?>
          </td>
          <td>
            <?php echo $res['zip'];  ?>
          </td>
          <td>
            <?php echo $res['fcatagory'];  ?>
          </td>
          

        </tr>

        <?php 
 }
}
  ?>

      </table>

    </div>
  </div>

  <script type="text/javascript">

    $(document).ready(function () {
      $('#tabledata').DataTable();
    })

  </script>

</body>

</html>