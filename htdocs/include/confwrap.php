<?php
// version-indepenent configuration variables
require_once("config.php");
require_once("funcs.php");

// variables
if(!isset($defLocale)) $defLocale = "en_US";
if(!isset($cfgVersion)) $cfgVersion = "0.4";
if(!isset($phpExt)) $phpExt = ".php";
if(!isset($maxSize)) $maxSize = ini_get('upload_max_filesize');
if(!isset($authReal)) $authRealm = "Restricted Area";
if(!isset($sessionName)) $sessionName = "DL" . md5($masterPath);
if(!isset($dsn)) $dsn = "sqlite:$spoolDir/data.sdb";

// derived data
$useSysLog = (!empty($logFile) && strstr($logFile, "/") === FALSE);
$iMaxSize = returnBytes($maxSize);
$dataDir = $spoolDir . "/data";
$adminPath = $masterPath . "admin$phpExt";
$dPath = $masterPath . "d$phpExt";

// constants
$banner = 'Generated by <a href="http://www.thregr.org/~wavexx/hacks/dl/">dl ticket service</a>';
