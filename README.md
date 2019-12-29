# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
##Configuring settings
Settings are stored in PHP file, as global variables. 
Description of those settings:
l. Variables that begin with "$s" are UI strings. This might be useful if you would like to translate UI. 
l. $webmLogo - path to webm icon image
l. $logo - path to logo image
l. $background - sets <body> parameters.
l. $database - path to database CSV file. NOTICE: it is not created automatically, you need to create empty file manually.
l. $bans - path to ban CSV file. NOTICE: it is not created automatically, you need to create empty file manually. 
l. $pictures - path to the folder where images would be saved
l. $maxThreads - placeholder
l. $maxPostLength - maximum post lenth
l. $maxUpload - maximum upload size.
l. $maxLines - maximum amoult of lines in the post
l. $cooldown - delay in seconds between different posts
l. $wipe - delay in seconds between same posts
l. $thumbnails - path to the folder, where thumbnails would be stored
l. $cookiesEnables - IT IS NOT A SETTING VARIABLE
  
##Lazy setup
l. Copy board.php
l. Create file "/private/posts.csv" and protect it from outside world (for ex. .htaccess)
l. Create file "/private/bans.csv"
l. Create folder "images"
l. Create folder "thumbnails"
