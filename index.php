<?php
session_start();
/*
 * TODO Session Parameter empfangen
 */
$_SESSION['ID'] = "42";

$id = $_SESSION['ID'];

echo "Answer to the Ultimate Question of Life, the Universe, and Everything ($id)";

?>