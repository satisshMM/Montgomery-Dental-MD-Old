<?php
if(isset($_POST['bk_aptm']))
{
$to = "hari.makersmind@gmail.com";
$subject = "For Appointment";
$are_u_new_patient=$_POST['new_patient'];
$pname=$_POST['patient_name']; 
$pnum=$_POST['phone_num'];
$preferdays=implode(',',$_POST['preferred_day']);
$besttime=implode(',',$_POST['best_time']);

$rsn_fr_apt=$_POST['rsn_apt'];
$other_info=$_POST['oth_info'];
$message = "
<html>
<head>
<title>Appointment Data</title>
</head>
<body>
<table>
<tr>
<th>Are you a new patient</th>
<td>$are_u_new_patient</td>
</tr>
<tr>
<th>Patient Name</th>
<td>$pname</td>
</tr>
<tr>
<th>Patient Number</th>
<td>$pnum</td>
</tr>
<tr>
<th>Prefered Days</th>
<td>$preferdays</td>
</tr>
<tr>
<th>Best time for appointment</th>
<td>$besttime</td>
</tr>
<tr>
<th>Reason for appointment</th>
<td>$rsn_fr_apt</td>
</tr>
<tr>
<th>Other Information</th>
<td>$other_info</td>
</tr>

</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <hari.makersmind@gmail.com>' . "\r\n";
$headers .= 'Cc: http://montgomerydentalmd.com' . "\r\n";

$mail = mail($to,$subject,$message,$headers);
if($mail)
{
    //echo "success";
    echo '<script>Swal.fire("Success");</script>';
    echo "<script>window.location.href='https://montgomerydentalmd.com/index.php';</script>";
}
else
{
    //echo "failed";
    echo '<script>Swal.fire("Failed");</script>';
}
}

?>