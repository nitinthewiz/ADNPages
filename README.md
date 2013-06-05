## ADNPages 2.0
ADNPages has a new avatar! It's now in a blog format with support for Markdown files. 
Why? So you can store your .md files on ADN File storage and use this as a blog.
The original code is from [markdown_blog](https://github.com/jacobbednarz/markdown_blog) 
but I couldn't fork it properly, so I just made a new repo.

## Installing
To install and start using this application open the following files in your
favourite editor:

#### config/config.php
The `POSTS_DIR` constant is used for defining where the single .txt file is kept that 
stores the info about all of your posts. There's also a .md file to give you a sample
format to get you started, but that gets ignored by the blog.
By default, this is a directory called 'posts_source'. If you want to change it, 
you will only need to change it here and it will be
altered throughout the application. `define('POSTS_DIR', 'posts_source');`

The `ADMIN_EMAIL` constant is currently unused however for future developments it
will be utilised for any notifications or debugging purposes that require
further action (i.e. 404's, error handling)

#### .htaccess
This doesn't work right now, but the way it should is - 
To keep the application URL's looking purrrty and user friendly, I added in an
Apache rewrite so the URL will be `http://domain.com/posts/name-of-post` which
hands the file to `view_post.php` and goes from there. You can update this if
you would prefer another URL structure.

#### layouts/header.html & layouts/footer.html
Plain and simple storage of static HTML files to allow the customisation of
your blog's theme and functionlity. The layout is only split into two files
however if you are comfortable with PHP, this can be easily changed to as many
or few as you would like.

#### view_post.php
Editting this file isn't super important however if you would like customised
error messages, throwing exceptions, etc. this is the place to do it.

## Adding posts
To add a new post just create the `.md` file and upload to ADN File storage using
[files-app.net](http://files-app.net/). Then, make the file public and copy the URL
which should be of the format - files.app.net/XXXXX
Finally, open the posts.txt file and add the XXXXX part to it, as shown in the example.
Make sure there's a new line after the last XXXXX.

## Contributing
The only way to improve something and make it better is to contribute to it.
Fork it, send pull requests, raise issues and bugs - All ideas and contributions
are welcome.

## Credits
- [PHP markdown](https://github.com/wolfie/php-markdown) for the base class of
  the application
- [markdown_blog](https://github.com/jacobbednarz/markdown_blog) for the original code
- ADN and all my friends there for supporting me.
- You, who's come all the way to check this project out.
