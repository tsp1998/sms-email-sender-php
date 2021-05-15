<?php
function wantToScheduleMessage($messageData) {
  if (isset($messageData[4])) {
    return true;
  } else {
    return false;
  }
}

function checkIsValidTimeForTextMessage($country) {
  if ($country !== NULL) {

    switch ($country) {
      case 'USA':
        date_default_timezone_set('America/New_York');
        break;

      case 'INDIA':
        date_default_timezone_set('Asia/Kolkata');
        break;
    }

    $currentTime = DateTime::createFromFormat('h:i a', date('h:i a'));
    $minTime = DateTime::createFromFormat('h:i a', '10:00 am');
    $maxTime = DateTime::createFromFormat('h:i a', '5:00 pm');

    if ($currentTime >= $minTime && $currentTime <= $maxTime) {
      return true;
    }
  } 

  return false;
}