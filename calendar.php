<?php
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_CalendarService.php';
session_start();

$client = new Google_Client();
$client->setUseObjects(true);
$client->setApplicationName("Google Calendar PHP Starter Application");

// Visit https://code.google.com/apis/console?api=calendar to generate your
// client id, client secret, and to register your redirect uri.
 $client->setClientId('261344666547.apps.googleusercontent.com');
 $client->setClientSecret('0jPqusgO2Fm79mMpQPFrhVaK');
 $client->setRedirectUri('http://localhost/Y-cline/calendar.php');
 $client->setDeveloperKey('AIzaSyBG1W3HJnV63_miXBUExYq4OdNgNYa6tOs');
$cal = new Google_CalendarService($client);
if (isset($_GET['logout'])) {
  unset($_SESSION['token']);
}

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $calList = $cal->calendarList->listCalendarList();
 // print "<h1>Calendar List</h1><pre>" . print_r($calList, true) . "</pre>";
  $optParam = array("orderBy" => "updated");
  $events = $cal->events->listEvents('TzuYuan.Chung@gmail.com', $optParam);
 // print "<h1>Events</h1><pre>" . print_r($events, true) . "</pre>";
  foreach ($events->getItems() as $event) {
    echo $event->getSummary();
	echo ';';
	echo $event->getDescription();
	echo ';';
	echo $event->getStart()->getDatetime();
	echo ';';
  }
    
  
$_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
  header('Location:'.$authUrl);
}