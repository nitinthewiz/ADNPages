<?php
	// Include global config and MD file
	include_once 'markdown.php';
	include_once 'config/config.php';

    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
	$rssfeed .= '<rss version="2.0">';
	$rssfeed .= '<channel>';
	$rssfeed .= '<title>Nitin\'s Notes</title>';
	$rssfeed .= '<link>http://notes.nitinkhanna.com</link>';
	$rssfeed .= '<description>A PHP-MarkDown-ADN blog</description>';
	$rssfeed .= '<language>en-us</language>';
	
	$directory = POSTS_DIR . '/';
	
	// Ensure the directory isn't empty
	if (file_exists($directory.'posts.txt'))
	{
		$txt_file    = file_get_contents($directory.'posts.txt');
		$rows        = explode("\n", $txt_file);
		foreach($rows as $row => $data)
		{
			$file = stripslashes(file_get_contents("https://files.app.net/".$data));
			$file_pieces = $post->split_file($file);
			$post_content = $file_pieces[2];
			$link = 'http://notes.nitinkhanna.com/view_post.php?name='.$data;
			$output = Markdown($post_content);
			
			$rssfeed .= '<item>';
	        $rssfeed .= '<title>' . $post->format_blog_title($file) . '</title>';
	        $rssfeed .= '<description>' . $output . '</description>';
        	$rssfeed .= '<link>' . $link . '</link>';
    	    // $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>'; // Needs to be implemented
	        $rssfeed .= '</item>';
		}
	}

	$rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
?>