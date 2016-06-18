<?php

session_start();

header("Content-type:text/html;charset=utf-8");
unset($_SESSION['s_username']);
unset($_SESSION['password']);
session_destroy();

echo "<script>window.alert('注销成功');window.location.href='../admin/login.php'</script>"; 




?>