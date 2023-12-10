<!DOCTYPE html>
<html>
<head>
    <title>Giải phương trình bậc 2</title>
</head>
<body>
<style>
   table {
            border: 1px solid #000;
            margin: 0 auto;
        }

</style>
<?php

    function ptbac1($a,$b){
        if ($a==0){
            if ($b==0)
              $nghiem ="Phương trình có vô số nghiệm";
            if ($b<>0)         
              $nghiem ="Phương trình vô nghiệm";
          }
        else{
           $nghiem = round(-($b/$a),2);
          }
        return $nghiem;
    }

    function ptbac2($a,$b,$c){
        if($a==0)
            $nghiem=ptbac1($b,$c);
        if($a<>0){
            $denta=pow($b,2)-4*$a*$c;
            if($denta<0)
               $nghiem="pt vo nghiem";
            if($denta==0){
               $nghiem="pt co nghiem kep x1=x2=".-($b/2*$a); 
            }else{
                $can=sqrt($denta);
                $x1=(-$b+$can)/(2*$a);
                $x2=(-$b-$can)/(2*$a);
                $nghiem="Phương trình có 2 nghiệm phân biệt x1=".round($x1,2).",x2=".round($x2,2);
            }
        }
                return $nghiem;
            }
            if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
            {
            $nghiem=ptbac2($_POST["a"],$_POST["b"],$_POST["c"]);
            }

?>


    <form action="bai5.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" />X^2 +
                </td>
                <td width="218">
                    <input type="text" name="b" id="textfield3" />X +
                </td>
                <td width="241">
                    <input type="text" name="c" id="textfield" /> = 0
                </td>
            </tr>
            <tr>
                <td colspan="4">Nghiệm:
                    <input name="nghiem" type="text" id="textfield2" width="400" value="<?php if (isset($nghiem)) echo $nghiem;?> " />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle">
                    <input type="submit" name="chao" id="chao" value="Xuất" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
