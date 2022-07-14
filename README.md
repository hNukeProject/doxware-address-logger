# doxware-address-logger
Doxware uses HTML5's Geolocation API to log, and gather GPS Coordinates using its API, and then reverse geocodes those coordinates into a physical address. This PoC was made for educational presentation.

Investor @ Hackforums.net 2022

default login:
user:password

NOTE: Once an account has been regisered delete registration.php to prevent people from making accounts, and viewing the log.

Setup instructions:
> Go to https://developer.mapquest.com and get a developers key
> Go into the  /logger/ folder and open up logged.php in a text editor and replace the [MAPQUEST_DEVELOPERS_API_KEY] with the developers key
> Go create a new DB, and user. Go into PHPMyAdmin and import upload.sql to populate the database.
> Now go open db.php and edit the information with the new credentials which include Database IP, Username, Password, and the database name.
Optional:
>Open index.php and modify the url to control redirects to keep people away from the login panel.

Now you have one of two options:
1. Keep the default login credentials.
2. Use the registration page to create a new user.

Lastly:
> Delete registration.php so no one else can register a new account.

Your API will by http//yourdomain/logger/index.php

just replace yourdomain with the domain name of the website you uploaded it to. Make sure the files are uploaded to the root directory.
