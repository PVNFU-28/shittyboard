# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
## Configuring settings
Settings are stored in PHP file, as global variables. 
Description of those settings:
1. Variables that begin with "$s" are UI strings. This might be useful if you would like to translate UI. 
1. $webmLogo - path to webm icon image
1. $logo - path to logo image
1. $background - sets <body> parameters.
1. $database - path to database CSV file. NOTICE: it is not created automatically, you need to create empty file manually.
1. $bans - path to ban CSV file. NOTICE: it is not created automatically, you need to create empty file manually. 
1. $pictures - path to the folder where images would be saved
1. $maxThreads - placeholder
1. $maxPostLength - maximum post lenth
1. $maxUpload - maximum upload size.
1. $maxLines - maximum amoult of lines in the post
1. $cooldown - delay in seconds between different posts
1. $wipe - delay in seconds between same posts
1. $thumbnails - path to the folder, where thumbnails would be stored
1. $cookiesEnables - IT IS NOT A SETTING VARIABLE
  
## Lazy setup
1. Copy board.php
1. Create file "/private/posts.csv" and protect it from outside world (for ex. .htaccess)
1. Create file "/private/bans.csv"
1. Create folder "images"
1. Create folder "thumbnails"
