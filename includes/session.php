<?php
  session_start();
  $_SESSION['project'] = $_POST['project'];
  $_SESSION['rvalue'] = $_POST['rvalue'];
  $project = $_SESSION['project'];
  $rvalue = $_SESSION['rvalue'];
?>
