<?php
/*
Template Name: Sample Template
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<SCRIPT type="text/javascript">
     <!-- 此check()函式在最後的「傳送」案鈕會用到 -->
      function check()
      {
              <!-- 若<form>屬性name值為reg裡的文字方塊值為空字串，則顯示「未輸入姓名」 -->
              if(contact.name.value == "")
              {
                      alert("未輸入姓名");
              }
              <!-- 若<form>屬性name值為reg裡的文字方塊與下拉式選單值為空字串或是沒有選擇月或日，則顯示「未輸入完整生日日期」 -->
              else if(contact.phone.value == "")
              {
                      alert("未輸入手機電話");
              }
              <!-- 若<form>屬性name值為reg裡的文字方塊與下拉式選單值為空字串或是沒有選擇月或日，則顯示「未輸入完整生日日期」 -->
              else if(contact.home.value == "")
              {
                      alert("未輸入地址及商品");
              }
              <!-- 若<form>屬性name值為reg裡的文字方塊與下拉式選單值為空字串或是沒有選擇月或日，則顯示「未輸入完整生日日期」 -->
              else if(contact.mail.value == "")
              {
                      alert("未輸入電子信箱");
              }
              <!-- 若<form>屬性name值為reg裡的核取方塊沒有選擇，則顯示「未選擇性別」 -->
              else if(!contact.YoN[0].checked && !contact.YoN[1].checked)
              {
                       alert("未選擇校友");
              }
              <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
              else
              {
              contact.submit();
              }
       }
</SCRIPT>
    <div class="wrap">
        <!--div id="primary" class="content-area"-->
        <main id="main" class="site-main" role="main">
            <div class="page1">
                <div class="header1"> Oder </div>
                <form class="form" method="post" name="contact" action="">
                    <input name="name" type="text" class="name feedback-input" placeholder="姓名" />
                    <input name="phone" type="text" class="phone feedback-input" placeholder="電話" />
                    <textarea name="home" type="text" class="home feedback-input" placeholder="訂購商品/地址"></textarea>
                    <input name="mail" type="text" class="mail feedback-input" placeholder="Email" />
                    <b>是否為校友:</b> <br>
                    <input type="radio" name="YoN" value="Yes">是
                    <input type="radio" name="YoN" value="No">否 <br>
                    <input class="submit-button" type="button" value="SUBMIT" type="submit" onclick="contact.action='http://www.linvinegar.com/insert1.php';check()"> </form>
            </div>
        </main>
        <!-- #main -->
        <!--/div-->
        <!-- #primary -->
    </div>
    <!-- .wrap -->
    <?php get_footer();
