<?php
session_start();
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_NAME']);
unset($_SESSION['SESS_USERNAME']);
session_write_close();
header('location: ../index.php');

?>