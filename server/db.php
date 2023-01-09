<?php
  if(!isset($dbh) || $dbh == NULL) {
    try {
      $dbh = new PDO("mysql:host=localhost;dbname=sivenkov_startfxcom;charset=utf8", "sivenkov_startfx", ",G!wz,R_Pp3L", array(PDO::ATTR_PERSISTENT => true));
    }
    catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die('<span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span>');
    }
  }
?>