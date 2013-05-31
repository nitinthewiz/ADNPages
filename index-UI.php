<?php
	if(!empty($_SERVER['QUERY_STRING'])){
		$response = stripslashes(file_get_contents("https://files.app.net/".$_SERVER['QUERY_STRING']));
		echo $response;
		echo "<p>ADNPages</p>";
	}
	else{
		echo "<!DOCTYPE html>";
		echo "<html>";
		echo "<head><script type=\"text/javascript\">function changeURL(){var urlString = \"http://pages.nitinkhanna.com/?\";var urlCode = document.getElementById('urlcode').value;window.location = urlString + urlCode;}</script></head>";
		echo "<p><h1>Welcome to ADNPages</h1></p>";
		echo "<p>ADNPages is a simple attempt to allow users to upload HTML files using files-app.net and view them</p>";
		echo "<p>online, or to showcase them to users.</p>";
		echo "<p>The reason we've built ADNPages is to display the ability to store entire web pages on ADN infrastructure.</p>";
		echo "<p>What does the future hold? Who knows? Flat file blogs, easy wireframing for UI folk, creating your own website...</p>";
		echo "<br />";
		echo "<p>For now, do the following - </p>";
		echo "<p>1. Create an HTML web page you want to showcase. Javascript, JQuery, images etc are supported.</p>";
		echo "<p>2. Upload the file to files-app.net</p>";
		echo "<p>3. Make the file visible to Public. This will give you a very nice shortURL like https://files.app.net/mzz8WrrM</p>";
		echo "<p>4. Put the last part of the URL(mz7b8Mj8) in the text box below and hit the Submit button. </p>";
		echo "<br />";
		echo "<p>You can pass out the URL of the page you want to display as follows - <a href=\"http://pages.nitinkhanna.com/?mzz8WrrM\">http://pages.nitinkhanna.com/?mzz8WrrM</a></p>";
		echo "<br />";
		echo "<p>The ADNPages project is made by <a href=\"https://alpha.app.net/nitinkhanna\">Nitin Khanna</a> and is available on <a href=\"https://github.com/nitinthewiz/ADNPages\">Github.</a></p>";
		echo "<br />";
		echo "<br />";
		echo "<p>Enter the URL Code here - </p>";
		echo "<form><input type='text' id='urlcode'><input type='button' onclick=\"changeURL();\" value='Submit'></form>";
		echo "<html>";
	}
?>