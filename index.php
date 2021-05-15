<?php

require('./functions/readCSV.php');
require('./functions/validateRecord.php');
require('./send.php');

function main() {
  $records  = readCSV();
  
  foreach ($records as $record) {
    if (validateRecord($record)) {
      send($record);
    } else {
      echo 'not perfect record\n';
    }
  }
}

main();

// $arr = ['name', 'age'];
// $arr2 = ['Shubham', 25];
// $arr3 = array_combine($arr, $arr2);
// print_r($arr3);
// echo $arr3['name'];