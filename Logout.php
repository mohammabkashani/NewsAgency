<?php
session_start();
session_unset(); // حذف تمام متغیرهای سشن
session_destroy(); // پایان سشن

header("Location: index.php"); // هدایت به صفحه اصلی
exit();
?>
