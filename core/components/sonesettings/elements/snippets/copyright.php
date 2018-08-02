<?php
$year = date("Y");
if($year == $start) {
	return $year;
} else {
return ''.$start.' – '.$year.'';
}