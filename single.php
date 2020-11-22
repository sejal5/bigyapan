<?php

$post = $wp_query->post;

if ( in_category('24') ) {

include(TEMPLATEPATH . '/single3.php'); } 

elseif ( in_category('5') ) {

include(TEMPLATEPATH . '/single2.php'); } 

elseif ( in_category('22') ) {

include(TEMPLATEPATH . '/single1.php'); } 

else {

include(TEMPLATEPATH . '/single.php');

}

?>