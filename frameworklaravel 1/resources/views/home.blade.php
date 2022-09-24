 <?php

if(date_default_timezone_get())
{
    echo "thoi gian mac dinh la: :", date_default_timezone_get();
}
echo "<br>";
echo date('y-m-d  h:i:s');
date_default_timezone_set('Asia/Ho_Chi_Minh');
echo "<br>";
echo date('y-m-d  h:i:s');
?>