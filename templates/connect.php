<?php
// Bestand voor database verbinding

function preprint_r( $arr ) {
    echo '<pre>'; 
    print_r( $arr );
    echo '</pre>'; 
  }  

  
  //verdindingsvariabelen database 
  $host = 'localhost';
  $db   = 'intakeproject';
  $user = 'root';
  $pass = '';
  $charset = 'utf8mb4';

  
  //connection string en PDO settings
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];

  //verbinding maken met database
  try {
    $pdo = new PDO($dsn, $user, $pass, $options);
  } catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
  }