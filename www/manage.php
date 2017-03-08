<?php
mysql_connect("localhost","linvinegarcom","55syf82x");//連結伺服器
mysql_select_db("linvineg_my_db");//選擇資料庫
mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
if($_POST['name']!=''){
 $name=$_POST['name'];
 $data=mysql_query("select * from custer where name like '%$name%'"); 
}else{
 $data=mysql_query("select * from custer");
}

?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>資料篩選</title>
    </head>

    <body> <img src="about1.jpg">
        <form id="form1" name="form1" method="post" action="">
            <p> 姓名：
                <input name="name" type="text" id="name" value="<?php echo $name?>" /> </p>
            <p>
                <input type="submit" name="button" id="button" value="搜尋" /> </p>
        </form>
        <?php
  echo '請輸入資料'."<p>";
 ?>
            <form action="" name="form2" method="Post">
                <p> 姓名：
                    <Input Type="text" Name="name" /> </p>
                <p> 電話：
                    <Input Type="text" Name="phone" /> </p>
                <p> 商品/地址：
                    <Input Type="text" Name="home" /> </p>
                <p> 信箱：
                    <Input Type="text" Name="mail" /> </p>
                <p> 校友：
                    <input type="radio" name="YoN" value="Yes">是           
                    <input type="radio" name="YoN" value="No">否  </p>
                <p>
                    <input type="button" value="新增" type="submit" onclick="form2.action='insert.php';form2.submit();" />
                    <input type="button" value="修改" type="submit" onclick="form2.action='update.php';form2.submit();" />
                    <input type="button" value="刪除" type="submit" onclick="form2.action='delete.php';form2.submit();" /> </p>
            </form>
            <p></p>
            <table width="700" border="1">
                <tr>
                    <td>name</td>
                    <td>phone</td>
                    <td>product/home</td>
                    <td>mail</td>
                    <td>YoN</td>
                </tr>
                <?php
  for($i=1;$i<=mysql_num_rows($data);$i++){
$rs=mysql_fetch_row($data);
?>
                    <tr>
                        <td>
                            <?php echo $rs[0]?>
                        </td>
                        <td>
                            <?php echo $rs[1]?>
                        </td>
                        <td>
                            <?php echo $rs[2]?>
                        </td>
                        <td>
                            <?php echo $rs[3]?>
                        </td>
                        <td>
                            <?php echo $rs[4]?>
                        </td>
                    </tr>
                    <?php
}
?>
            </table>
            <p>&nbsp;</p> <img src="about1.jpg"> </body>

    </html>