<?php
session_start();

if($_COOKIE['test']==1) {
    unset($_COOKIE['test']);
    unset($_COOKIE['nom']);
    unset($_COOKIE['role']);
}
session_unset();
session_destroy();

print_r($_COOKIE);
echo session_status();
?>