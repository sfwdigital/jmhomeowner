<?php
  session_start();

  $_SESSION['project'] = $_POST['project'];
  $_SESSION['rvalue'] = $_POST['rvalue'];
  $_SESSION['insulation_type'] = $_POST['insulation_type'];
  $_SESSION['width'] = $_POST['width'];
  $_SESSION['length'] = $_POST['length'];
  echo $project = $_SESSION['project'];
  echo $rvalue = $_SESSION['rvalue'];
  $width = $_SESSION['width'];
  $length = $_SESSION['length'];
?>
