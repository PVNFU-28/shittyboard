# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
![Alt text](/Untitled.png?raw=true)
## Configuring settings
Settings are stored in PHP file as global variables. 
Description of those settings:
Variables that begin on letter "s" are UI strings.

$webmLogo - webm icon path
$logo - logo path
$background - <body> arguments
$database - database bath
$logging - logging path
$bans - ban path
$pictures - image folder path
$maxThreads - maximum amount of threads
$maxPostLength - maximum post length
$maxUpload - max upload size
$maxLines - max lines
$report - link to a report page
$cooldown - newbie cooldown time
$thumbnails - thumbnails path
$salt - salt for IP adresses
$pro - amount of posts required to become a professional poster
$proCooldown - cooldown for professional posters 
$intialCooldown - cooldown for new users (block posting form)
  
## Lazy setup
1. Copy board.php
1. Create file "/private/posts.csv" and protect it from outside world (for ex. .htaccess)
1. Create file "/private/bans.csv"
1. Create file "/private/ips.csv"
1. Create folder "images"
1. Create folder "thumbnails"
