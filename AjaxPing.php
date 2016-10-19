// ajax ping for setups where gzip is enabled and webserver is proxied

<?php 

require_once('config.php');
$data = array();

$pinginfo = exec("ping -c 1 " . $COMPUTER_LOCAL_IP[$selectedComputer]);

if ($pinginfo != ""){
  $asleep = true;
  $message = 'computer is awake';
  }else{
  $asleep = false;
  $message = 'computer is sleeping, sshh...':
  }
  
$data['sleep'] = $asleep;
$data['message'] = $message;
echo json_encode($data);
?>
