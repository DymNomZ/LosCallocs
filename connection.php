<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "dbf2borgonia");

$connection = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$connection) {
    die (mysqli_error($connection));
}