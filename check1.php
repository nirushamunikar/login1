<?php
session_start();
include('connect.php');

$insertQuery="INSERT into userinfo VALUES('1','nirusha','nirusha123','Nirusha Munikar','21','Nayabazar')";
$insertQuery="INSERT into userinfo VALUES('2','urusha','urusha123','Urusha Munikar','24','Genroy')";
$insertQuery="INSERT into userinfo VALUES('3','urgen','urgen123','Urgen Munikar','13','Nayabazar')";
$insertQuery="INSERT into userinfo VALUES('4','bibesh','bibesh123','Bibesh Manandhar','22','Ranibari')";

$insert=mysqli_query($con,$insertQuery);

$usrname=$_POST['uname'];
$paswrd=$_POST['pwd'];


$query='SELECT * FROM  userinfo WHERE username="'.$usrname.'"';
$result=mysqli_query($con,$query);
//print_r($result);
echo '<br/>';
echo '<br/>';


 $i=mysqli_num_rows($result);
 if($i>0):
    while($row=mysqli_fetch_assoc($result)){
        $username=$row['username'];
        $password=$row['password'];
        
        if($username == $usrname && $password == $paswrd):
            echo "hello ".$usrname;
        endif;
        echo "<br/>";
        echo  $row["name"]." " . $row["age"]. " " . $row["address"]. "<br>";
        
    }
endif;

 /*if($i>0):
   
        $_SESSION['username']=$usrname;
        header('Location:user1.php');
        else:
        echo "account is invalid";
        
        
    
endif;*/

// $userarray=Array(
//     'name'=> 'Nirusha Munikar',
//     'age'=> '21'
// );





mysqli_close($con);



?>

