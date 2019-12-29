# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
## Configuring settings
Settings are stored in PHP file, as global variables. 
Description of those settings:
* Variables that begin with "$s" are UI strings. This might be useful if you want to translate UI. 
* $webmLogo - path to webm icon image
* $logo - path to logo image
* $background - sets <body> parameters.
* $database - path to database CSV file. NOTICE: it is not created automatically, you need to create empty file manually.
* $bans - path to ban CSV file. NOTICE: it is not created automatically, you need to create empty file manually. 
* $pictures - path to the folder where images would be saved
* $maxThreads - placeholder
* $maxPostLength - maximum post lenth
* $maxUpload - maximum upload size.
* $maxLines - maximum amoult of lines in the post
* $cooldown - delay in seconds between different posts
* $wipe - delay in seconds between same posts
* $thumbnails - path to the folder, where thumbnails would be stored
* $cookiesEnables - IT IS NOT A SETTING VARIABLE
  
## Lazy setup
1. Copy board.php
1. Create file "/private/posts.csv" and protect it from outside world (for ex. .htaccess)
1. Create file "/private/bans.csv"
1. Create folder "images"
1. Create folder "thumbnails"

## Demo:
https://shittyboard.ddns.net (Website might me unavailable, it is normal, it would mean that I lost interest in project)
