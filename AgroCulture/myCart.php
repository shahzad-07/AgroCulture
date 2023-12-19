<?php
	session_start();
	require 'db.php';
    if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}
    $bid = $_SESSION['id'];
    if(isset($_GET['flag']))
    {
        $pid = $_GET['pid'];

        $sql = "INSERT INTO mycart (bid,pid)
               VALUES ('$bid', '$pid')";
        $result = mysqli_query($conn, $sql);
    }

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture: My Cart</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class>

		<?php
			require 'menu.php';
			function dataFilter($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>

		<!-- One -->



		<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Image Cards With Hover Effect</title>
    <link rel="stylesheet" href="donate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

  
    <!--image card layout start-->
    <div class="container">
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="1_direct.jpg" width="290" height="240" alt="">
          <div class="details">
            <a href="https://www.directrelief.org/" target="_blank"><h2 style="color:#000000";><span>Direct </span>Relief</h2></a>
            <p style="color:#000000";>Healthy People. Better World.</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->
  
        <div class="image">
          <img src="2_aarthy.jpg" width="290" height="240" alt="">
          <div class="details">
          <a href="https://aarathy.org/" target="_blank"><h2 style="color:#000000";><span>Aarathy </span>Trust</h2></a>
            <p style="color:#000000";>working for social uplift and running an old age home</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->

        <div class="image">
          <img src="3_asha.jpg" width="290" height="240" alt="">
          <div class="details">
          <a href="https://ashaf.org/" target="_blank"><h2 style="color:#000000";><span>Asha </span>Foundation</h2></a>
            <p style="color:#000000";>Action, service, hope for aids</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>


      <!--image row end-->
      <!--image row start-->
      <div class="row">
        <!--image card start-->
        <div class="image">
          <img src="4_pbs.jpg" width="290" height="240" alt="">
          <div class="details">
          <a href="https://www.puneblindschool.org/" target="_blank"><h2 style="color:#000000";><span>Pune Blind </span>School</h2></a>
            <p style="color:#000000";>School for visually impaired built on trust</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->

        <div class="image">
          <img src="5_sam.jpg" width="290" height="240" alt="">
          <div class="details">
          <a href="https://www.samarthanam.org/" target="_blank"><h2 style="color:#000000";><span>Samarthanam </span></h2></a>
            <p style="color:#000000";>For Youth with Disabilities</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
        <!--image card start-->

        <div class="image">
          <img src="6_cf.jpg" width="290" height="240" alt="">
          <div class="details">
          <a href="https://childfundindia.org/" target="_blank"><h2 style="color:#000000";><span>Childfund </span></h2></a>
            <p style="color:#000000";>Helping child grow healthy</p>
            <div class="more">
              <a href="payment.php" class="read-more"> <span>Donate</span></a>
            </div>
          </div>
        </div>
        <!--image card end-->
      </div>
      <!--image row end-->
    </div>
    <!--image card layout end-->

  </body>
</html>
      







					</header>
			</section>
	</body>
</html>
