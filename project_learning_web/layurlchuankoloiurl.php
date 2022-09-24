<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lí dữ liệu</title>

</head>

<body>
    <h1>Xử lí dữ liệu</h1>
    <a href="? mod=product & idd= id "> Xem sản phẩm</a><br>
    <?php
    // <a href="?mod='product'&id=12">Xem sản phẩm</a>
    // $mod=();
    // $id=();
    // if( isset($mod) || isset($id))
    // {
    // $url='http://localhost/project_learning_web/chitietsanpham.php';
    // $url=parse_url($url);
    // echo 'pa#th:', $url['path'];
    if (isset(($_GET['mod'])) & isset($_GET['idd'])) {
        $modi = $_GET['mod'];
        $idd = $_GET['idd'];

        // $mod=parse_url($mod);
        // mod='product';
        // $mod='product';
        //  $id=$_GET['id'];
        //  $id=parse_url($id);
        echo  "mod= $modi <br>";
        echo "id= $idd <br>";
    }
    //  $file=fopen("comment.html","a");
    //  fwrite($file,$mod);
    //  fwrite($file,$id);
    //  fclose($file);
    // }

    ?>
</body>

</html>