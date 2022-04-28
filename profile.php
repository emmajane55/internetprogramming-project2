<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Home</title>
	<style>
		body {background-color: #00b384;}
		body {background-color: #0274ba;}
		body {background-color: #4594c5;}
		a {color: navy;}
		
		.msg{
			opacity: 0; 
  
    animation: opacityOn 2s normal forwards;
    
}

@keyframes opacityOn {
    0% {
        opacity: 0;
    }
    25% {
        opacity: 0.25;
    }
    50% {
        opacity: 0.5;
    }
    75% {
        opacity: 0.75;
    }
    100% {
        opacity: 1;
    }
}



	</style>
</head>
<body>
	<div class="container">

	<?php


	require_once 'pageFormatSession.php';
	require_once 'connection.php';
    $pageTitle = "Settings";
    $img = "./images/logo.jpg";
    pageHeaderSession($pageTitle,$img);

    if (!isset($_SESSION['name']))
    {
      header('refresh:0;url=loginForm.php');
      exit();
    }

    $conn=connect_db();
    $uid = $_SESSION['name'];
    $query="SELECT * FROM users WHERE userID=\"$uid\";";

    $result=$conn->query($query);
     
     if(!$result)
     {
      die("Query error!");
     }
     $rows=$result->num_rows;

     if($rows==1)
      {
        $row=$result->fetch_array(MYSQLI_ASSOC);
        $username=$row["userName"];
        $pwd=$row["password"];
        $email=$row["email"];
        $name=$row["name"];
      }
      else
      {
        die("Query error!");
      }
      $conn->close();


    echo<<<EOT
    <div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Account settings
    </h4>

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#contact-info">Info</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

 
              <hr class="border-light m-0">

              <div class="card-body">
                <div class="form-group">
                  <label class="form-label">Username</label>
EOT;
               echo "<input type=\"text\" class=\"form-control mb-1\" id=\"username\" value=\"$username\">";

echo<<<EOT

            
			</div>
                <div class="form-group">
                  <label class="form-label">Name</label>
EOT;
              echo    "<input type=\"text\" class=\"form-control\" id=\"name\" value=\"$name\">";
echo<<<EOT
                </div>
                <div class="form-group">
                  <label class="form-label">E-mail</label>
EOT;
               echo   "<input type=\"text\" class=\"form-control mb-1\" id=\"email\" value=\"$email\" onblur=\"validateEmail(this)\">
               <p id=\"emailmsg\"></p>
               </div> <input type=\"hidden\" id=\"uid\" name=\"uid\" value=\"$uid\">";
echo<<<EOT
                
				<p id="generalmsg"></p>
                <div class="text-right mt-3">
      				<button type="button" class="btn btn-primary" onclick="submitGeneral()">Save changes</button>&nbsp;
      				
    			</div>
              </div>

            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Current password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">New password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Repeat new password</label>
                  <input type="password" class="form-control">
                </div>
                <div class="text-right mt-3">
      				<button type="button" class="btn btn-primary">Save changes</button>&nbsp;
      				
    			</div>

              </div>
            </div>
            <div class="tab-pane fade" id="contact-info">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Bio</label>
                  <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                </div>
                <div class="form-group">
                  <label class="form-label">Birthday</label>
                  <input type="text" class="form-control" value="May 3, 1995">
                </div>
                <div class="form-group">
                  <label class="form-label">Country</label>
                  <select class="custom-select">
                    <option>USA</option>
                    <option selected="">Canada</option>
                    <option>UK</option>
                    <option>Germany</option>
                    <option>France</option>
                  </select>
                </div>


              </div>

              <div class="text-right mt-3">
      			<button type="button" class="btn btn-primary">Save changes</button>&nbsp;
      			
    		</div>
              <hr class="border-light m-0">


            </div>
          </div>
        </div>
      </div>
    </div>



  </div>

EOT;		
	?>

	
<script type="text/javascript" src="./js/validationProfile.js"></script>
<script>
"use strict";
function submitGeneral() {
  let email=document.getElementById("email");
  
  if (validateEmail(email))
  {
  document.getElementById("generalmsg").innerHTML ="";
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("generalmsg").innerHTML = '<div class="msg font-weight: bold;"'+this.responseText+'</div>';
  }
  xhttp.open("POST", "submitGeneral.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  let uid=document.getElementById("uid").value;
  let name=document.getElementById("name").value;
  let username=document.getElementById("username").value;
  let email=document.getElementById("email").value;
 
  xhttp.send(`uid=${uid}&name=${name}&username=${username}&email=${email}`);
}
}

function validateEmail(id) {
  var field=id.value;
  var flag=false;
  var msg=document.getElementById("emailmsg");
  if (field=="")
  {
    msg.innerHTML='<div class="msg font-weight: bold;">Email cannot be empty</div>';
    msg.className="text-danger";
  }
  else if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field)))
  {
    msg.innerHTML='<div class="msg font-weight: bold;">Incorrect Email</div>';
    msg.className="text-danger";
  }
  else
  {
    flag=true;
    msg.innerHTML="";
  }


  return flag;
}
</script>
</body>
</html>