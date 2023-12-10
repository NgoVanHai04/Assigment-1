<?php
$ten="";
if (isset($_POST["ten"])) {
    if ($_POST["ten"] == "") {
        $ten = "Bạn chưa nhập tên";
    } else {
        $ten = "Xin chào " . $_POST["ten"];
    };
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
    <style>
        body {
            text-align: center;
        }

        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
    </style>
</head>
<body>


    <form action="bai1.php" method="post">
        <table width="271">
            <tr>
                <td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3" />
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label><?php echo $ten; ?></label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
