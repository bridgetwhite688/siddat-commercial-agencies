<?php
/* Database Connection */


$dbuser = "root"; /* Database Username */
$dbpass = ""; /* Database Username Password */
$host = "localhost"; /* Database Host */
$db = "siddat";  /* Database Name */
$mysqli = new mysqli($host, $dbuser, $dbpass, $db); /* Connection Function */

date_default_timezone_set("Africa/Nairobi");/* Default Time Zone */
$currentYear = (new DateTime())->format('Y');
$years = range(1970, (int)$currentYear);

/* Greetings */
$dat = new DateTime('now', new DateTimeZone('Africa/Nairobi'));
$date = $dat->format('H');
if ($date < 12)
    $greeting  =   "Good Morning";
else if ($date < 17)
    $greeting =  "Good Afternoon";
else if ($date < 20)
    $greeting =  "Good Evening";
else
    $greeting =  "Good Evening";


/* Truncate Text Function */
// function truncate($text, $chars = 25)
// {
//     if (strlen($text) <= $chars) {
//         return $text;
//     }
//     $text = $text . " ";
//     $text = substr($text, 0, $chars);
//     $text = substr($text, 0, strrpos($text, ' '));
//     $text = $text . "...";
//     return $text;
// }


/* Number Formats And Precisions */
// function number_format_short($n, $precision = 1)
// {
//     if ($n < 900) {
//         // 0 - 900
//         $n_format = number_format($n, $precision);
//         $suffix = '';
//     } else if ($n < 900000) {
//         // 0.9k-850k
//         $n_format = number_format($n / 1000, $precision);
//         $suffix = 'K';
//     } else if ($n < 900000000) {
//         // 0.9m-850m
//         $n_format = number_format($n / 1000000, $precision);
//         $suffix = 'M';
//     } else if ($n < 900000000000) {
//         // 0.9b-850b
//         $n_format = number_format($n / 1000000000, $precision);
//         $suffix = 'B';
//     } else {
//         // 0.9t+
//         $n_format = number_format($n / 1000000000000, $precision);
//         $suffix = 'T';
//     }
//     if ($precision > 0) {
//         $dotzero = '.' . str_repeat('0', $precision);
//         $n_format = str_replace($dotzero, '', $n_format);
//     }
//     return $n_format . $suffix;
// }
