<?php

/**
 * Configuration for database connection
 *
 */

$host       = "10.0.11.20";
$username   = "masterunir";
$password   = "administrador";
$dbname     = "masterunir";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );