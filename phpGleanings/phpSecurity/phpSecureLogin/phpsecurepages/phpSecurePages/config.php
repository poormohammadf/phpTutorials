<?php
/**************************************************************/
/*         phpSecurePages version 0.44 beta (04/02/15)        */
/*              Copyright 2015 Circlex.com, Inc.              */
/*                                                            */
/*          ALWAYS CHECK FOR THE LATEST RELEASE AT            */
/*              http://www.phpSecurePages.com                 */
/*                                                            */
/*              Free for non-commercial use only.             */
/*               If you are using commercially,               */
/*         or using to secure your clients' web sites,        */
/*   please purchase a license at http://phpsecurepages.com   */
/*                                                            */
/**************************************************************/
/*           Start of phpSecurePages Configuration            */
/**************************************************************/


/****** Installation ******/
$cfgIndexpage = '/index.php';
  // page to go to, if login is cancelled
  // Example: if your main page is http://www.mydomain.com/index.php
  // the value would be $cfgIndexpage = '/index.php'

/****** Admin Email ******/
$admEmail = '';
  // E-mail address of the site administrator
  // (This is being showed to the users on an error, so you can be notified by the users)
  // May be left blank

/****** Error Messages ******/
$noDetailedMessages = false;
  // Show detailed error messages (false) or give one single message for all errors (true).
  // If set to 'false', the error messages shown to the user describe what went wrong.
  // This is more user-friendly, but less secure, because it could allow someone to probe
  // the system for existing users.

/****** Password Encryption ******/
$passwordEncryptedWithMD5 = true;          // Set this to true if the passwords are encrypted with the MD5 algorithm

/****** Choose Language ******/
$languageFile = 'lng_english.php';        // Choose from one of the 40 language files in the /lng directory

/****** IP-Restricted Access ******/
$use_IP_restricted_access=false;             // Set this to true if you need to additionally restrict access by IP address or by an IP address range
                                             // If set to 'false', IP checks will not be performed.

// $allowed_addr[0] = array ("22", "23", "123");
// $allowed_addr[1] = array ("128", "223");

// Examples:
// $allowed_addr[0] = array ("12", "15", "12", "1");  // Limits logins to a single IP: 12.15.12.1
// $allowed_addr[1] = array ("191", "12", "12"); // Limits logins to IP addresses in the range of 191.12.12.1 to 192.12.12.255
// $allowed_addr[2] = array ("216", "200"); // Limits logins to IP addresses in the range of  216.200.0.1 to 216.200.255.255.
//
// Declare as many $allowed_addr[$i] lines as you require! Start $i at zero, and just make sure you increase $i as you add IP's!


/****** Database ******/
$useDatabase = true;                     // Choose between using a database or data as input

/* this data is necessary if a database is used */
$cfgServerHost = 'localhost';             // MySQL hostname
$cfgServerPort = '3306';                      // MySQL port - leave blank for default port
$cfgServerUser = 'root';                  // MySQL user
$cfgServerPassword = '';                  // MySQL password

$cfgDbDatabase = 'phpSecurePages';        // MySQL database name containing phpSecurePages table
$cfgDbTableUsers = 'phpSP_users';         // MySQL table name containing phpSecurePages user fields
$cfgDbLoginfield = 'user';                // MySQL field name containing login word
$cfgDbPasswordfield = 'password';         // MySQL field name containing password
$cfgDbUserLevelfield = 'userlevel';       // MySQL field name containing user level
  // Choose a number which represents the category of this users authorization level.
  // Leave empty if authorization levels are not used.
  // See readme.txt for more info.
$cfgDbUserIDfield = 'primary_key';        // MySQL field name containing user identification
  // enter a distinct ID if you want to be able to identify the current user
  // Leave empty if no ID is necessary.
  // See readme.txt for more info.


/****** Data ******/
$useData = true;                          // choose between using a database or data as input

/* this data is necessary if no database is used */
$cfgLogin[1] = 'admin1';                        // login word (username)
$cfgPassword[1] = 'admin1';                     // password
$cfgUserLevel[1] = '5';                    // user level
  // Choose a number which represents the category of this users authorization level.
  // Leave empty if authorization levels are not used.
  // See readme.txt for more info.
$cfgUserID[1] = '';                       // user identification
  // enter a distinct ID if you want to be able to identify the current user
  // Leave empty if no ID is necessary.
  // See readme.txt for more info.

$cfgLogin[2] = 'admin2';
$cfgPassword[2] = 'admin2';
$cfgUserLevel[2] = '3';
$cfgUserID[2] = '';

$cfgLogin[3] = 'admin3';
$cfgPassword[3] = 'admin3';
$cfgUserLevel[3] = '2';
$cfgUserID[3] = '';

$cfgLogin[4] = 'admin4';
$cfgPassword[4] = 'admin4';
$cfgUserLevel[4] = '4';
$cfgUserID[4] = '';

$cfgLogin[5] = 'guest';
$cfgPassword[5] = 'guest';
$cfgUserLevel[5] = '1';
$cfgUserID[5] = '';

/**************************************************************/
/*             End of phpSecurePages Configuration            */
/**************************************************************/
?>
