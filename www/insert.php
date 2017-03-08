<p>新增成功
    <input type="button" onclick="javascript:location.href='http://www.linvinegar.com/manage.php'" value="確認"></input>
</p>
<?php   
 $dbhost = 'localhost';   
 $dbuser = 'linvinegarcom';   
 $dbpass = '55syf82x';   
 $dbname = 'linvineg_my_db';

 $name =$_REQUEST['name'];
 $phone = $_REQUEST['phone'];
 $home = $_REQUEST['home'];
 $mail = $_REQUEST['mail'];
 $YoN = $_REQUEST['YoN'];
 
 $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die('Error with MySQL connection');
  
  mysql_query("SET NAMES 'utf8'");
  mysql_select_db($dbname);   
  
  $sql_insert = "INSERT INTO custer(name, phone, home, mail, YoN) VALUES ('$name','$phone','$home','$mail','$YoN')";
  $result = mysql_query($sql_insert) or die('MySQL insert error');
  
  $sql_query = "select * from custer where name='$name'";
  $result = mysql_query($sql_query) or die('MySQL query error');
  
  while($row = mysql_fetch_array($result))
  {
   echo "您的姓名:";  
   echo $row['name']."<br>";
   echo "您的連絡電話:";
   echo $row['phone']."<br>";
   echo "您訂購的商品與地址:";
   echo $row['home']."<br>";
   echo "Email:";
   echo $row['mail']."<br>"; 
   echo "校友:";
   echo $row['YoN']."<br>"; 
  }
?>