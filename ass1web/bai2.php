<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Giải phương trình bậc 1</title>
</head>
<style>
   table {
            border: 1px solid #000;
            margin: 0 auto;
        }

</style>
<body>

<?php
if (isset($_POST["a"]) && isset($_POST["b"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    if($a==0){
        if($b==0)
        $nghiem="pt vo so nghiem";
        if($b<>0)
        $nghiem="pt vo so nghiem";
    }
    else{
        $x=-($b/$a);
        $x=round($x,2);
        $nghiem= "x= $x";
    }
}


?>


    <form action="bai2.php" method="post">
        <table width="744" border="1">
            <tr>
                <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1</strong></td>
            </tr>
            <tr>
                <td width="120">Phương trình</td>
                <td width="250">
                    <input name="a" type="text" /> X +
                </td>
                <td width="352">
                    <label for="textfield"></label>
                    <input name="b" type="text" id="textfield" /> = 0
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="textfield2"></label>
                    <!-- Hiển thị kết quả nghiệm -->
                    <input name="kq" type="text" id="textfield2" value="<?php if (isset($nghiem)) echo $nghiem; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
