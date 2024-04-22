
 <?php

 $secret_code = 'secret';

 $serviz =  $_SERVER['HTTP_HOST'];
 $hostnamez =  gethostname();




 if(strtoupper(PHP_OS) == strtoupper("LINUX"))
 {
 $ds=shell_exec('udevadm info --query=all --name=/dev/sda | grep ID_SERIAL_SHORT');
 $serialx = explode("=", $ds);
 $serial = $serialx[1];

 $serialcompleto = $serial.$serviz.$hostnamez;

 $licensi = md5('username'.'password'.trim($serialcompleto).$secret_code);
 }
 else
 {
 function GetVolumeLabel($drive) 
 {
 if (preg_match('#Volume Serial Number is (.*)\n#i', shell_exec('dir '.$drive.':'), $m)) 
 {
 $volname = ' ('.$m[1].')'; 
 } 
 else 
 { 
 $volname = ''; 
 }
 return $volname;
 }
 $serial = str_replace("(","",str_replace(")","",GetVolumeLabel("c")));

 $serialcompleto = $serial.$serviz.$hostnamez;


 $licensi = md5('username'.'password'.trim($serialcompleto).$secret_code);
 }
 $lisfile = $licensi.'.key';

 if(!file_exists(__DIR__.'/'.$lisfile))
 {
 header('Location: timer.html');
 }
 ?>


