<?php

// Include the class and simple configuration file
include_once 'markdown.php';
include_once 'config/config.php';

$requested_post = htmlspecialchars(trim(stripslashes($_GET['name'])));


$filename= 'https://files.app.net/'.$requested_post;
$file_headers = @get_headers($filename);

if($file_headers[0] == 'HTTP/1.0 404 Not Found'){
      echo 'Post does not exist';
} else if ($file_headers[0] == 'HTTP/1.0 302 Found'){
    echo 'Post does not exist';
} else {
    // Split the file into slugs and the post
    $file_pieces = $post->split_file(file_get_contents($filename));
    $post_data = $file_pieces[1];
    $post_content = $file_pieces[2];

    $post->slugify($post_data);

    // Parse it!
    $output = Markdown($post_content);

    // Make it pretty 
    include_once 'layouts/header.html';
    echo $output;
    include_once 'layouts/footer.html';
}