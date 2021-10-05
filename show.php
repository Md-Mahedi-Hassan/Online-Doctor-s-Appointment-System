<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<body background="showdetails.jpg"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin | Appointment Details</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Appointment Details</div>
            <div id="content">
       			<div id="rightnow">
				<div class="block">
				<?php
				
				$res=mysqli_query($conn,"select * from appointment");
				echo "<table class='table table-bordered table-hover table-striped' style='table-layout: fixed'>";
				echo "<tr>";
				echo "<th>"; echo "Appointment ID"; echo "</th>";
				echo "<th>"; echo "Patient's Name"; echo "</th>";
				echo "<th>"; echo "Patient's Email"; echo "</th>";
				echo "<th>"; echo "Patient's No"; echo "</th>";
				echo "<th>"; echo "Appointment Date"; echo "</th>";
				echo "<th>"; echo "Appointment Time"; echo "</th>";
				echo "<th>"; echo "Doctor's ID"; echo "</th>";
				
				echo "<th>"; echo "Delete"; echo "</th>";
				echo "<th>"; echo "Edit"; echo "</th>";
				echo "</tr>";
				while($row=mysqli_fetch_array($res))
				{
					echo "<tr>";
					echo "<td>"; echo $row["appointment_id"]; echo "</td>";
					echo "<td>"; echo $row["pname"]; echo "</td>";
					echo "<td>"; echo $row["email"]; echo "</td>";
					echo "<td>"; echo $row["number"]; echo "</td>";
					echo "<td>"; echo $row["date"]; echo "</td>";
					echo "<td>"; echo $row["slot"]; echo "</td>";
					echo "<td>"; echo $row["doc_id"]; echo "</td>";
					
					echo "<td>"; ?> <a href="delete_appointment.php?id=<?php echo $row["appointment_id"]; ?>"><button class="btn btn-danger">Delete</button></a> <?php echo "</td>";
					echo "<td>"; ?> <a href="edit_appointment.php?id=<?php echo $row["appointment_id"]; ?>"><button class="btn btn-success">Edit</button></a> <?php echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
				?>
				</div>
			  </div>
            </div>
      </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © team BRACU CSE370 project <2019> (Mahedi,Labib,Monika,Mirza,Liakat)</small>
</script>
</body>

</html>