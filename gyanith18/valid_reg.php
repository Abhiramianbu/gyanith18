<?php
    session_start();
    //require_once "recaptchalib.php";
    try{
        include("dbcon.php");
        $error="";
        
            if (!isset($_POST['fname'])) {
                $error .= "Enter a first name<br>";
            }  
            if (!isset($_POST['lname'])) {
                $error .= "Enter a last name<br>";
            }
            if (!isset($_POST['pwd1'])) {
                $error .= "Please enter a password <br>";
        
            }
             if (!isset($_POST['cpwd'])) {
                $error .= "Please fill confirm password field<br>";
        
            }  
            if (!isset($_POST['email1'])) {
        
                $error .= "An email address is required<br>";
        
            }  if (!isset($_POST['college'])) {
        
                $error .= "select a valid college name<br>";
        
            } 
            if(isset($_POST['college']) && $_POST['college']=='0' && !isset($_POST['collegetxt'])){
                $error .= "Please enter college name<br>";
            }
            if (!isset($_POST['mobile'])) {
        
                $error .= "please fill the mobile number<br>";
        
            } 
            if($_POST['pwd1']!=$_POST['cpwd'])
            {
                $error .= "password missmatch<br>";
            }
            if($error!="")
            {
                echo "Error ".$error;
            }
            else
            {
                $email = $_POST['email1'];
                $stmt=$db->prepare("SELECT * FROM user WHERE Emailid=?");
                $stmt->bindParam(1,$email,PDO::PARAM_STR,50);
                $stmt->execute();
                $result = $stmt->fetchAll();
                if($result){   
                    echo 'This email id is already registered';
                }
                else{
                    $name = $_POST['fname'].' '.$_POST['lname'];
                    $college = $_POST['college'];
                    $mobile =  $_POST['mobile'];
                    $gender = $_POST['gender'];
                    $hash = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);
                    if($college=='0')
                    {
                      $college=$_POST['collegetxt'];
                    }
                    $stmt = $db->prepare("INSERT INTO user (Name,Emailid,Password,Gender,College,Phone) VALUES (:name,:email,:passwd,:gender,:college,:phone)");
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':passwd', $hash);
                    $stmt->bindParam(':gender', $gender);
                    $stmt->bindParam(':college', $college);
                    $stmt->bindParam(':phone', $mobile);
                    // insert a row
                    if($stmt->execute()){
                        if(isset($_POST['accomodation']) && $_POST['accomodation'] == 'accomodation') 
                        {
                            $stmt=$db->prepare("select gid from `user` where Emailid=:email");
                            $stmt->bindParam(':email', $email);
                            $stmt->execute();
                            $result = $stmt->fetch();
                            $gid=$result['gid'];
                            $sql="insert into accomodation (gid) values (:gid)";
                            $stmt1 = $db->prepare($sql);
                            $stmt1->execute(array(':gid'=>$gid));
                        }
                        if(isset($_POST['reference']) && $_POST['reference'] == 'ref') 
                        {       $stmt=$db->prepare("update `campusambassador`set count=count+1 where College=:college");
                                if(!$stmt->execute(array(':college'=>$college))){
                                    echo "Could not update campus ambassador<br/>";
                                }
                        }
                        if(isset($_POST['campus']) && $_POST['campus']=='campus'){
                            $sql="insert into `campusambassador` (`gid`,`College`) values (:gid,:college)";
                            $stmt1 = $db->prepare($sql);
                            $stmt1->execute(array(':gid'=>$gid,':college'=>$college));
                        } 
                        echo "registered";
                    }
        
                }
                // send_mail($email,$body,$body1);
            }
        
    }
    catch(PDOException $e){
	    $e->getMessage();
    }
?>