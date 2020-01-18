# shittyboard
Imageboard engine written in PHP, that uses CSV-like file as database
![Alt text](/Untitled.png?raw=true)
## Configuring settings
Starting from version 5.3, configs are stored in separate PHP file (settings.php)
```php
ini_set('display_errors', 1);// Remove this line, unless you want to debug something
// Those are UI strings, they might be helpful if you want to translate the UI.
$sBoardName="Imageboard";
$sPostReply="Post Reply";
$sPost="Post";
$sAnonymous="Anonymous";
$sReplies="replies";
$sDatabaseError="<h1>Error: Database error</h1>";
$sThreadNotFound="<h1>Error: Thread not found</h1>";
$sNameTooLong="<h1>Error: Name is too long</h1>";
$sIllegalPost="<h1>Error: Illegal post</h1>";
$sPostTooLong="<h1>Error: Post is too long</h1>";
$sLockError="<h1>Error: Can't lock database</h1>";
$sWrongExt="<h1>Error: File is not an image or webm video</h1>";
$sBan="<center><h1>Banned</h1><br><img src=\"banned.png\" width=\"400\"></center><br><hr> Reason: ";
$sSilentBan="";
$sCooldown="<h1>Error: You're posting too fast.</h1>";
$sSticky="";
$sCaptchaFail="<h1>Error: Captcha is missing or wrong</h1>";
$sStream="All posts";
$sNormal="Show threads";
$sReport="Report";
$sLegal="All trademarks and copyrights on this page are owned by their respective parties. Images uploaded are the responsibility of the Poster. Comments are owned by the Poster.";
$sWait="Please wait: ";
$sSeconds="s.";
//Those are real settings
$webmLogo="logo/webm.jpg"; //Path to  thewebm icon
$logo="logo/logo.png"; //Path to the logo
$database="database/posts.csv"; //Path to database
$bans="database/bans.csv"; //Path to ban list
$pictures="images/images"; //Path for saving images
$css="css"; //Path to the folder with CSS
$maxThreads=150; //Maximum amount of threads
$maxPostLength=3000; //Maximum post length
$maxUpload=4096+2048; //Maximum upload size
$maxLines=100; //Maximum lines per post
$report=""; //Link to report form (ommited here)
$cooldown=60;//Posting delay for newcomers
$thumbnails="images/thumbnails";//Path for saving thumbnails
$pro=4;//Amount of posts required in order to become a professional poster
$proCooldown=10;//Delay for professional posters
$initialCooldown=120;//Delay for first post
$key="loh";//encrypting key for cookies
$ipsalt="secret";//Salt for IP hash
```
## Lazy setup
Just download the repository, it should work.  
You need to restrict access to database/posts.csv if you value privacy of your users.  
Oh, and you might need imagick PHP lib and openSSL PHP lib. Maybe something else, I don't remember

## DEMO
https://shittyboard.ddns.net/ (may be down, and may contain offensive posts)

mock-up: comming soon
