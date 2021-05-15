<?php

require('./functions/utils.php');

function sendTextMessage($messageData, $shouldScheduled = false)
{
  
}

function sendEmail($messageData, $shouldScheduled = false)
{
}

function send($messageData)
{

  // TODO uncomment at the end
  // $shouldScheduled = wantToScheduleMessage($messageData)

  if (checkIsValidTimeForTextMessage($messageData[3])) {
    sendTextMessage($messageData);
  }

  // sendEmail();
}
