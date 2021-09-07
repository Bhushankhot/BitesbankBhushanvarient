<?php
include('../includes/smtp/PHPMailerAutoload.php');
function alertS($alrtmsg)
{
    echo "      
    <div class='alrt-s alrt'>
    <div class='alrt-text-s'>
        $alrtmsg
    </div>
        <button class='btn-cls-s' onclick='alrtCls()' onload='fadeIn()'><img class='btn-img' src='../images/cancel-s.png'></button>
    </div>
    ";
}
function alertF($alrtmsg)
{
    echo "      
    <div class='alrt-f alrt'>
    <div class='alrt-text-f'>
        $alrtmsg
    </div>
        <button class='btn-cls-f' onclick='alrtCls()' onload='fadeIn()'><img class='btn-img' src='../images/cancel-f.png'></button>
    </div>
    ";
}
function sesh_start()
{
    session_start();
    // if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
    //      echo "Not Logged in";
    // else
    //      echo "Logged in as ".$_SESSION['phone'];
}
function sesh_start_index()
{
    session_start();
    if(isset($_SESSION['logout']) && $_SESSION['logout']==1)
    {
        session_unset();
        session_destroy();
        $GLOBALS['alrt']=1;
    }
    // if(!isset($_SESSION['logstat']) || $_SESSION['logstat']!=true)
    //      echo "Not Logged in";
    // else
    //      echo "Logged in as ".$_SESSION['phone'];
}

function smtp_mailer($to,$name,$prob,$edate){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 0;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "bitesbankhelp@gmail.com";
	$mail->Password = "bankbites2";
	$mail->SetFrom("bitesbankhelp@gmail.com");
	$mail->Subject = "RESPONSE TO YOUR QUERY AT BITESBANK.COM";
	$mail->Body = "Hello $name, Thank you for contacting BitesBank Helpdesk on $edate. Your current problem is - $prob . Tell us more about your problem and send us corresponding images to support your issue.";
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
