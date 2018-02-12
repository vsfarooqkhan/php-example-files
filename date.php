<?php

foreach($date_array as $key => $val) {
}
$formated_date= "Todays date:";
$formated_date.= $date_array['mdat']."/";
$formated_date .=$date_array['mon'] . "/";
$formated_date .=$date_array['year'];

print $formated_date;
?>
