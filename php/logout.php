<?php
session_start();
if(isset($_SESSION['cravings_id']))
{
    $_SESSION = array();
    session_destroy();
    echo "seesion unset";
}
else
{
    echo "session unset error";
}
?>
