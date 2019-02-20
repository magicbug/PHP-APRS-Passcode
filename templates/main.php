<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>APRS Passcode Generator</title>
		<style type="text/css" media="screen">
			body {
				font-family: Arial, "MS Trebuchet", sans-serif;
				font-size: 14px;
				background-color: whiteSmoke;
			}
			
			#container {
				margin: 0 auto;
				width: 400px;
				padding: 10px;
				border: 1px solid #E5E5E5;
				background-color: #ffffff;
			}
			label {
				width: 100%;
				font-weight: bold;
			}
		</style>
	</head>

	<body>
		<div id="container">
		
			<h1>APRS Passcode Generator</h1>
			
			<!-- HTML Form to collect callsign. -->
			<form method="post" action="index.php/passcode">
				<label for="callsign">Callsign</label>
				<input type="text" name="callsign" value="" />
				<input type="submit" name="Submit" value="Get Passcode" />
			</form>
			
			<!-- Info about the project -->
			<p>Technical Example of Passcode Generation using PHP</p>
			<p>Source code available on <a href="https://github.com/magicbug/PHP-APRS-Passcode" title="Github" target="_blank">Github</a></p>
		</div>
	</body>

</html>
