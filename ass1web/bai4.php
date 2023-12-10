<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<style>
        body {
            text-align: center;
        }

        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
    </style>
<body>

<?php
if (isset($_POST["so_dau"]) && isset($_POST["so_cuoi"])) {
    $so_dau = $_POST["so_dau"];
    $so_cuoi = $_POST["so_cuoi"];
    $tong = 0;
    $tong_chan = 0;
    $tong_le = 0;
    $tich = 1;
    
    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        $tong = $tong + $i;
    }

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        $tich = $tich * $i;
    }

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        if ($i % 2 == 0) {
            $tong_chan = $tong_chan + $i;
        }
    }

    for ($i = $so_dau; $i <= $so_cuoi; $i++) {
        if ($i % 2 != 0) {
            $tong_le = $tong_le + $i;
        }
    }
}
?>


    <form action="bai4.php" method="post">
        <table width="400" border="1" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="2"><strong>Nhập khoảng số:</strong></td>
            </tr>
            <tr>
                <td>Số bắt đầu</td>
                <td><input type="text" name="so_dau" value="" /></td>
            </tr>
            <tr>
                <td>Số kết thúc</td>
                <td><input type="text" name="so_cuoi" value="" /></td>
            </tr>
            <tr>
                <td colspan="2"><strong>Kết quả:</strong></td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td><input type="text" name="tong" value="<?php if (isset($tong)) echo $tong;?>" /></td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td><input type="text" name="tich" value="<?php if (isset($tich)) echo $tich;?>" /></td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td><input type="text" name="tong_chan" value="<?php if (isset($tong_chan)) echo $tong_chan;?>" /></td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td><input type="text" name="tong_le" value="<?php if (isset($tong_le)) echo $tong_le;?>" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="button" value="Tính toán" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
