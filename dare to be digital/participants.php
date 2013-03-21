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
            	<form action="login.php" style="margin-top:5px;">
  				<input type="text" name="username" placeholder="Username">
  				<input type="password" name="password" placeholder="Password">
  				<input type="submit" value="Login">
				</form><br /><br />
                <a href="#register" style="margin-top:-5px;">Register</a>
        </div>
        </div>
        <div id="menu">
        	<div id="menuLoc">
        		<a href="index.php" alt="Hjem">Home</a>
            	<a href="info.php" alt="Info">Info</a>
            	<a href="winner.php" alt="Picking a winner">Picking a winner</a>
            	<a href="participants.php" alt="Find Participants">Find participants</a>
            </div>
        </div>
        	<div id="menuUnder">
        	</div>
		
        <div id="main">
            <div id="mainFull">
            <p style="font-size:29px;">FIND OTHER PARTICIPANTS</p>
            <input type="text" name="search" placeholder="Search" style="margin-top:20px;" />
            <input type="submit" value="Search" /><br /><br />
            <img src="img/dots.png" style="margin-top:15px;"/>
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
			<form action="register.php" method="post">
            <p>First name</p>
            <input type="text" name="firstName" /><br />
            <p>Last name</p>
            <input type="text" name="lastName" /><br /><br />
            <p>Phone</p>
            <input type="text" name="tlf" /><br /><br />
            <p>Username</p>
            <input type"text" name="createUsername" /><br />
            <p>Password</p>
            <input type="text" name="createPassword" /><br /><br />
            <p>Email</p>
            <input type="text" name="email" /><br /><br />
            <input type="submit" value="Register" />
            </form>
		</section>
		<footer class="cf">
			<a href="#" style="color:white;">Close</a>
		</footer>
	</aside>
    </div>

</body>
</html>
