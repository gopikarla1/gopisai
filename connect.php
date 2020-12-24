<?php
  $Name= $_POST['Name'];
  $password= $_POST['password'];
  
  $db = new mysqli('localhost','root','','test'); 
  if($db->connect_error){
    die('connection failed'.$db->connecterror);
  }
else{
  $stmt = $db->prepare("insert into login(Name,password) values(?,?)");
  $stmt->bind_param("ss",$Name,$password);
  $stmt->execute();
  echo "login successfully..";
  $stmt->close();
  $db->close();
}
?>