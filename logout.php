<?php
// موارد پایین وقتی حذف کنیم کاربر کلا از صفحه اطلاعاتش پاک می شود
session_destroy();
header("location:index.php");
?>