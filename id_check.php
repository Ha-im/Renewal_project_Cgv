<?php
require_once('inc/db.php');

if (isset($_POST['userid'])) {
  $userid = mysqli_real_escape_string($conn, $_POST['userid']);

  $sql = "SELECT * FROM signup_board WHERE userid = '$userid'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo 'taken';
  } else {
    echo 'available';
  }
}
mysqli_close($conn);
?>