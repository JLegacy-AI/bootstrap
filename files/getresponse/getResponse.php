<?php
$servername = "localhost";
$username   = "new_parkme_db";
$password   = "lRR{&bCmWNgB";
$database   = "new_parkme_db";

include 'class.getResponse.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($result = $conn -> query("SELECT id, email FROM booking_details WHERE getResponse='no'")) {
    if ($result) {
        $ret = array();
        while($row = mysqli_fetch_assoc($result)){
            if(!empty($row['email'])){
                $email =  $row['email'];
                $id    =  $row['id'];
                /*
                    echo "id -> ".$id."AND email -> ".$email;
                    echo "<br>";
                */
                $clientkey 	= 'aua8mhj8evf61s0vizqqm17rah1ahpyd';
                $campaignId = "yxPHH";
                
                $params = array(
					"email"      => $email,
					"dayOfCycle" => "0",
					"campaign"   => array(
									"campaignId" => $campaignId,
								)
				);
	
	            $GetResponse 	= new GetResponse($clientkey);
		        $addContact 	= $GetResponse->addContact($params);
	            
	            echo $sql = ' UPDATE booking_details SET getResponse="yes" WHERE id='.$id;
	            $conn -> query($sql);
	            
	        }
        }
    }
}

/*
$clientkey 	= 'aua8mhj8evf61s0vizqqm17rah1ahpyd';
                $campaignId = "830fJ";
                
$GetResponse 	= new GetResponse($clientkey);
$getCampaigns 		= $GetResponse->getCampaigns();
		echo "<pre>";
		print_r($getCampaigns);
		echo "</pre>";


$email =  "momin@ffff.com";
                
                
                $params = array(
					"email"      => $email,
					"dayOfCycle" => "0",
					"campaign"   => array(
									"campaignId" => $campaignId,
								)
				);
	
	            $GetResponse 	= new GetResponse($clientkey);
		        $addContact 	= $GetResponse->addContact($params);
		        echo "<pre>";
		        print_r($addContact);
		        echo "</pre>";
		       */ 
?>