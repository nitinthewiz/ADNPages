<?php

// Include global config
include_once 'config/config.php';

// Display the header files
include_once 'layouts/header.html';
// function curl_get_contents($url)
// {
//   $curl = curl_init($url);
//   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
//   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
//   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
//   $data = curl_exec($curl);
//   curl_close($curl);
//   return $data;
// }
echo "<!DOCTYPE html>";
echo '<h2>Archive</h2>';

$directory = POSTS_DIR . '/';

// Ensure the directory isn't empty
if (file_exists($directory.'posts.txt'))
{
	//echo 'file exists '; //debug
	$txt_file    = file_get_contents($directory.'posts.txt'); // instead of file_get_contents
	$rows        = explode("\n", $txt_file);
	//echo $rows; //debug
	// array_shift($rows); // not needed as data starts from line 1
	foreach($rows as $row => $data)
	{
		//echo $data;//debug
		$file = stripslashes(file_get_contents("https://files.app.net/".$data));
		//echo 'the file is - <br>'; //debug
		//echo $file; //debug
		echo '<p><a href="view_post.php?name=' . $data . '">' . $post->format_blog_title($file) . '</a></p>';
	}

	// $file_handle = fopen($directory."posts.txt", "r");
	// while (!feof($file_handle)) {
 //   		$line = fgets($file_handle);
 //   		$file = stripslashes(file_get_contents("https://files.app.net/".$line));
	// 	echo '<p><a href="posts' . $post->path_to_post($file) . '">' . $post->format_blog_title($file) . '</a></p>';
	// }
	// fclose($file_handle);
}
else{
	echo 'No posts found';
}

include_once 'layouts/footer.html';

?>