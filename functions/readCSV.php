<?php

function readCSV()
{
  $records = [];
  $keys = NULL;
  $row = 0;
  $filePointer = fopen('Sample.csv', 'r');

  while (!feof($filePointer)) {
    // if (!$keys && $row === 0) {
    //   $keys = fgetcsv($filePointer);
    //   continue;
    // }
    
    $record = fgetcsv($filePointer);
    // $record = array_combine($keys, $record);
    $records[$row++] = $record;
  }

  fclose($filePointer);

  return $records;
}