<?php
require "owns.class.php";

$owns = new \Owns();
$owns->redirect($_GET['url']);
