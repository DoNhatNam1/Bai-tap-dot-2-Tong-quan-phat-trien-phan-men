<!-- Viết chương trình loại bỏ các khoảng trắng thừa trong chuỗi bằng php -->

<?php
$str = "   Chuỗi    cần   xử   lý   ";
$str = preg_replace('/\s+/', ' ', trim($str));
echo $str; // Kết quả: "Chuỗi cần xử lý"
?>