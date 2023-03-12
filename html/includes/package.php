<?php

function get_package($pack) {
    global $tmp_name;
    if($pack == "package 1"){ $tmp_name = 199; return "199"; }
    if($pack == "package 2"){ $tmp_name = 399; return "399"; }
    if($pack == "package 3"){ $tmp_name = 799; return "799"; }
    if($pack == "package 4"){ $tmp_name = 1599; return "1,599"; }
    if($pack == "package 5"){ $tmp_name = 3199; return "3,199"; }
    if($pack == "package 6"){ $tmp_name = 6399; return "6,399"; }
    if($pack == "package 7"){ $tmp_name = 12799; return "12,799"; }
    if($pack == "package 8"){ $tmp_name = 25599; return "25,599"; }
    if($pack == "package 9"){ $tmp_name = 51199; return "51,199"; }
    if($pack == "package 10"){ $tmp_name = 102399; return "1,02,399"; }
    // echo $pack;

}







?>