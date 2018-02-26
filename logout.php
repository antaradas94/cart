<?php
session_start();
unset($_SESSION['uid']);
session_destroy();
echo "Thank you. Visit again"."<br/>";
echo "<a href='login.php'>Login again</a>";
?>