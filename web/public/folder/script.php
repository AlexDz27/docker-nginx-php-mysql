<?php

try {
  $dsn = 'mysql:host=mysql;dbname=test;charset=utf8;port=3306';
  $pdo = new PDO($dsn, 'dev', 'dev');

  $stmt = $pdo->prepare("SELECT * FROM `items`");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach ($stmt->fetchAll() as $item) {
    echo "<pre>";
    print_r($item);
    echo "</pre>";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}