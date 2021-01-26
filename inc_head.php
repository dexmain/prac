<?php
  session_start();
  if( isset( $_SESSION[ 'id' ] ) ) {
    $prac_login = TRUE;
  }
?>