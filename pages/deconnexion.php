<?php
session_unset();
session_destroy();
header("Refresh:0 index.php?page=authentif");
?>