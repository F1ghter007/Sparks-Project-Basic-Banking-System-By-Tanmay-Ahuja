

<?php
session_start();
include 'connection.php';
$q="select * from transfers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="headerbtn.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title> Basic Banking Website-By Tanmay Ahuja </title>
  </head>
  <body style="background-image : url('back.png');background-repeat: no-repeat;background-size: cover;height=1080;background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1E90FF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><b> Basic Banking System </b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto "style="text-align: right;">
        <a class="nav-link active bold" aria-current="page" href="/">Home</a>
        <a class="nav-link bold" href="customerdetails.php">Customers</a>
        <a class="nav-link bold" href="selectuser.php">Transactions</a>
        <a class="nav-link bold" href="history.php">Transaction History</a>
      </div>
    </div>
  </div>
</nav><br>
<style>
	 tbody, td, tfoot, th, thead, tr {
            font-size: x-large;
            border-color: inherit;
            border-style: solid;
            border-width: medium;
		}
		.container,.box_1620{
			max-width: 540px;
		}
		h3{
        margin-left : 40%;
      }
</style>
<section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img src="img/personal.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="personal_text">
								<h1 align=center font-family=georgia><b><u>Transaction History</u></b></h1>
									<table class ="flat-table flat-table-1" align=center style="background-image: url("color.png");
									<thead>
									<th>ID</th>
									<th>SENDER NAME</th>
									<th>RECIEVER NAME</th>
									<th>AMOUNT</th>
									</thead>
									<tbody>
									<tr align=center>
									<?php
									while($row=mysqli_fetch_array($result)){
										?>
										<td><?php echo $row["id"]; ?></td>
										<td><?php echo $row["senderName"]; ?></td>
										<td><?php echo $row["recieverName"]; ?></td>
										<td><?php echo $row["Amount"]; ?></td>
									<tr align = center>
									<?php }
									?>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		<nav class="navbar fixed-bottom navbar-light"  style="background-color: #1E90FF;">
  <div class="container-fluid" width="100%" >
    <h3 style="text-align: center;">Made By Tanmay Ahuja</h3>
    <!-- <div class="containerbot" width="100%" style="text-align:center;">Tanmay Ahuja</div> -->
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
	

