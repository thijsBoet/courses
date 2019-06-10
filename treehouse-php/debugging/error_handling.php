<?php

/*
Types of errors in PHP

1* Notice   => Bad practice, but still executes script
2* Warning  => Very likely to cause errors in the future, but still executes script
3* Fatal    => Unable to excecute logic or syntax error

AKA E_NOTICE | E_WARNING | E_FATAL

ENABLE ERROR LOGGING ON LIVE SERVER:

Add to .htaccess
# log errors
php_value log_errors 1

# log file for errors
php_value error_log php-error.txt

How to display errors on dev server?

1* .htaccess file setting => change first to htaccess.txt to edit then rename .htaccess
php_flag display_startup_errors on
php_flag display_errors on
php_value error_reporting -1
php_flag html_errors on
php_value log_errors 1
php_value error_log php-error.txt

2* php.ini
Can be found with phpinfo(); and search for php.ini path

Dev settings
* error_reporting: Set the error reporting level. The default value is: “E_ALL & ~E_NOTICE,” meaning this this would should all error levels except E_NOTICE. For a development server you probably want to turn everything on by just using E_ALL.

* display_errors: Set it to “ON” (default is “OFF”)if errors are to be printed to the screen.

* log_errors: This indicates whether or not error logging should be done; default value is “on.”

* error_log string: Sets the name of the file where script errors should be logged

* display_startup_errors: For debugging, you can also turn on errors that occur during PHP's startup sequence

* html_errors: You can also control HOW your errors as displayed. The new format for HTML errors produces clickable messages that direct the user to a page describing the error, or function causing the error. This is on by default but you can turn it off

3* Error handling with individual PHP files

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set("html_errors", 1);

Using a php file to debug sytax errors

Create a file "syntax.debug.php" with the following code (replace "syntax.php" with the file you want to test):

<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

include('syntax.php');

*/
phpinfo();
