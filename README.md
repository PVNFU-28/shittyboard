# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
![Alt text](/Untitled.png?raw=true)
## Configuring settings
Settings are stored in PHP file as global variables. 
Description of those settings:
* Variables that begin with "$s" are UI strings. This might be useful if you want to translate UI. 
* $webmLogo - Path to the webm icon
* $logo - Path to the logo
* $background - BODY tag parameters/arguments. Can be used to set a background color
* $database - Path to the post database
* $bans - Path to the ban database
* $pictures - Path to the image folder
* $maxThreads - Maximum threads alive
* $maxPostLength - Maximum post length
* $maxUpload - Maximum upload size
* $maxLines - Maximum lines in the post
* $cooldown - Cooldown delay 
* $thumbnails - Path to the thumbnail folder
* $salt - Salt for MD5 checksum of an IP
* $cookiesEnables - IT IS NOT A SETTING VARIABLE
  
## Lazy setup
1. Copy board.php
1. Create file "/private/posts.csv" and protect it from outside world (for ex. .htaccess)
1. Create file "/private/bans.csv"
1. Create folder "images"
1. Create folder "thumbnails"

## Demo:
https://shittyboard.ddns.net (Website might be unavailable, it is normal, it would mean that I lost interest in project)
