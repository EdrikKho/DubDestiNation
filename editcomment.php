<?php
	include 'Comment2.php';
	include 'Comment.php';
	date_default_timezone_set('Asia/Singapore');
?>

<!DOCTYPE html> 

<html> 
	<head>
		<link rel="stylesheet" href="cssmenubar.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>About | DubDestiNation</title>
		<link rel="icon" type="image/x-icon" href="logo.png">
		
	</head>
	<body>
		<div class="menu_bar">
			
			<div class="logo">
				<img src="logo.png" width="60px" height="60px">
			</div>
			
			<h1 class="name"><span>Dub</span>Desti<span>Nation</span></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li>
					<a href="#">HISTORY</a>
				
					<div class="dropdown_menu">
						<ul>
							<li><a href="Team History.html">TEAM HISTORY</a></li>
							<li><a href="Logo History.html">LOGO HISTORY</a></li>
						</ul>
					</div>
				</li>
				
				<li>
					<a href="Championships.html">CHAMPIONSHIPS</a>
					
					<div class="dropdown_menu2">
						<ul>
							<li><a href="1947 Championship.html">1947 CHAMPIONSHIP</a></li>
							<li><a href="1956 Championship.html">1956 CHAMPIONSHIP</a></li>
							<li><a href="1975 Championship.html">1975 CHAMPIONSHIP</a></li>
							<li><a href="2015 Championship.html">2015 CHAMPIONSHIP</a></li>
							<li><a href="2017 Championship.html">2017 CHAMPIONSHIP</a></li>
							<li><a href="2018 Championship.html">2018 CHAMPIONSHIP</a></li>
							<li><a href="2022 Championship.html">2022 CHAMPIONSHIP</a></li>
						</ul>
					</div>	
				</li>
				<li><a href="All-time Greats.html">ALL-TIME GREATS</a></li>
				<li><a href="#">ROSTER</a>
					<div class="dropdown_menu4">
						<ul>
							<li><a href="Coaching Staff.html">COACHING STAFF</a></li>
							<li><a href="Starting Five.html">STARTING FIVE</a></li>
							<li><a href="Bench.html">BENCH</a></li>
						</ul>
					</div>
				</li>
				
				<li>
					<a href="#">SLOGAN</a>
					
					<div class="dropdown_menu3">
						<ul>
							<li><a href="Strength In Numbers.html">STRENGTH IN NUMBERS</a></li>
							<li><a href="Gold Blooded.html">GOLD BLOODED</a></li>
						</ul>
					</div>
				</li>
				
				<li><a href="http://localhost/DubDestiNation/About.php">ABOUT</a></li>
			</ul>
		</div>

		<p style="font-family:verdana; font-size:250%; padding-top: 50px; padding-left: 8%; color:#04395E; padding-bottom: 2%; padding-top: 7.4%;"> <b> Query Zone </b> </p>

		<p style="font-family: Arial Narrow; font-size:200%; margin-left: 8%; padding-bottom: 1%;"> What would you like to know more about the Golden State Warriors? </p>
	
        <?php
            $cid = $_POST['cid'];
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];

		    echo "<form method='POST' action'".editComments($conn)."'>
                <input type='hidden' name='cid' value='".$cid."'>
	            <input type='hidden' name='uid' value='".$uid."'>
			    <input type='hidden' name='date' value='".$date."'>
			    <textarea name='message'>".$message."</textarea>
                <button type='submit' name='commentSubmit'>Respond/Edit</button>
		    </form>";
		?>
        <br> <br> <br> <br> <br> <br> <br> 
        

	<!-- Footer -->
	<div class="Footer"> 
		<i>
			DEVELOPED BY: WEB BROS <br> 
			<!-- Acknowledgements Button -->
			<div class="FooterBtn">
				<a class="AcknowledgementsBtn" href="Acknowledgements.html">
					ACKNOWLEDGEMENTS
				</a> 
			</div>
		</i> 
	</div> 
   </body>
</html>