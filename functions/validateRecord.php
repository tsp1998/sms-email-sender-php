<?php

function validateRecord($record)
{
  $message = trim($record[0]);
  $email = trim($record[1]);
  $phone = trim($record[2]);
  $country = trim($record[3]);

  $isValidRecord = true;

  if (!(gettype($message) === 'string' && strlen($message) > 1 && strlen($message) <= 160)) {
    $isValidRecord = false;
  }

  if (!(is_numeric($phone) && strlen($phone) === 10)) {
    $isValidRecord = false;
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValidRecord = false;
  }

  if ($country !== 'USA' && $country !== 'INDIA') {
    $isValidRecord = false;
  }

  return $isValidRecord;
}
