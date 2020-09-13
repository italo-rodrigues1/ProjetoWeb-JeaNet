<?php
// Fix Api Whatsapp on Desktops
$iphone = strpos($_SERVER['HTTPS_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTPS_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTPS_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTPS_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTPS_USER_AGENT'],"iPod");
// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
  header('Location: https://api.whatsapp.com/send?phone=5581988346853&text=Olá%20Preciso%20de%20um%20Agendamento!');
  //OR
  echo "<script>window.location='https://api.whatsapp.com/send?phone=5581988346853&text=Olá%20Preciso%20de%20um%20Agendamento!'</script>";
}
// all others
else {
  header('Location: https://web.whatsapp.com/send?phone=5581988346853&text=Olá%20Preciso%20de%20um%20Agendamento!');
  //OR
  echo "<script>window.location='https://web.whatsapp.com/send?phone=5581988346853&text=Olá%20Preciso%20de%20um%20Agendamento!'</script>";
}
?>