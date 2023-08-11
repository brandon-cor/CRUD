<?php 
  // constants
  define('DB_HOST', 'localhost');
  define('DB_USER', 'brandon');
  define('DB_PASS', 'sherlock10');
  define('DB_NAME', 'php_dev');

  // create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
