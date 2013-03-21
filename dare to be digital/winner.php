<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/css.css" type="text/css">
<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
<title>Dare to Be Digital Nordic</title>
</head>

<body>
<?php include 'mysql_connect.php'; ?>
		<div id="header">
        </div>
	<div id="wrap">
    	<div id="headerLogo">
        <div id="login">
            	<form action="demo_form.asp" style="margin-top:5px;">
  				<input type="text" name="username" placeholder="Username">
  				<input type="password" name="password" placeholder="Password">
  				<input type="submit" value="Login">
				</form><br /><br />
                <a href="#register" style="margin-top:-5px;">Register</a>
        </div>
        </div>
        <div id="menu">
        	<div id="menuLoc">
        		<a href="index.html" alt="Hjem">Home</a>
            	<a href="info.html" alt="Info">Info</a>
            	<a href="winner.html" alt="Picking a winner">Picking a winner</a>
            	<a href="participants.html" alt="Find Participants">Find participants</a>
            </div>
        </div>
        	<div id="menuUnder">
        	</div>
		
        <div id="main">
        	<div id="mainFull">
            	<p style="font-size:29px;">PICKING A WINNER AT NITH</p>
            	<img src="img/awardshow.jpg" />
            	<p>On the 15th of May we will pick the nordic winner of Dare to be Digital at NITH. Five student teams from Norway, Denmark and Sweden, will compete for the opportunity to spend two months in Scotland with the opportunity to work on their own game. The Scottish government sponsors pay, accommodation and travel to the international student competition "Dare to be Digital" to the winning team.</p><br />
                <p>There will be held a semi-finale in Scandinavia, with NITH as partner for Dare to be Digital. A judging panel consisting of game developers from EA DICE (Sweden), IO Interactive (Denmark) and Norwegian Funcom has already made ​​an online assessment of submissions from Scandinavian colleges and universities, and picked out the five best entries. These come from the University of Skövde (Sweden), IT University of Copenhagen (Denmark), University College of Hedmark and Nith.</p><br />
                <p>Similarly finals will be held in the UK, India and China. The finals will be held at Abertay University in Dundee, Scotland from June to August. Here, a total of 14 teams develop their game from design to playable version for 10 weeks, with access to the necessary hardware and software, and mentors from game companies like Sony, Rockstar North, Sega, Ubisoft and the BBC.</p><br />
                <p>- For the students who go to this final, there will be a unique opportunity to gain experience in game production, linking networks with international resources and be challenged by the best game production students in the world, says head of game production at Nith, Eivind Brevik. Last year a team from NITH qualified for the final and got a lot of praise for the game <a href="http://www.gamer.no/artikler/23467/demo-break-a-leg/" alt="Break a leg">Break a leg</a>.</p>
                <p>The Scandinavian semifinal held at NITH in Oslo Wednesday May 15th. The five teams will then present their game idea for the judges, based on the feedback they received after the first round. The winner will be announced the same day at 13.30, and will thus be able to look forward to a summer vacation with paid games production.</p><br />
                <p><b>How to get to NITH:</b></p>
                <p>NITH is located in Oslo at Oslo Central Station, specifically in the gallery. The gallery is the long building that is above Bus Terminal, which stretches from Plaza Hotel Oslo to Grønland. You'll get to NITH in a few minutes, whether you are driving the bus, train, tram or metro. The nearest stops named Grønland / Grønlandsleiret or Bussterminalen, wheter it's by bus, metro or tram.</p>
        	</div>
        </div>
        
        <div id="footer">
        	<p>Laget av Gruppe 27</p>
        </div>
        
        <aside id="register">
		<header>
			<h2>Register form</h2>
		</header>
		<section>
			<form action="register">
            <p>First name</p>
            <input type="text" name="firstName"><br />
            <p>Last name</p>
            <input type="text" name="lastName"><br /><br />
            <p>Username</p>
            <input type"text" name="createUsername"><br />
            <p>Password</p>
            <input type="text" name="createPassword"><br /><br />
            <p>Email</p>
            <input type="text" name="email"><br /><br />
            <input type="submit" value="Register">
            </form>
		</section>
		<footer class="cf">
			<a href="#" style="color:white;">Close</a>
		</footer>
	</aside>
    </div>

</body>
</html>
