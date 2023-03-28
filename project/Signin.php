<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" type="text/css" href="design.css">

  <title>Signin Form</title>
  <script>
    $(document).ready(function(){
        $('.loginBtn').click(function()
    {
        $('.login').show();
        $('.signUp').hide();
  /* border bottom on button click */
  /*$('.loginBtn').css({'border-bottom' : '2px solid #ff4141'});*/
  /* remove border after click */
  /*$('.signUpBtn').css({'border-style' : 'none'});*/
});
$('.signUpBtn').click(function()
    {
        $('.signUp').show();
        $('.login').hide();
  /* border bottom on button click */
  /*$('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});*/
  /* remove border after click */
  /*$('.loginBtn').css({'border-style' : 'none'});*/
});
$('.btn2').mouseenter(function()
{
  $('.btn2').css({'background-color': 'rgba(10, 136, 43, 0.5)'});
})
$('.btn2').mouseleave(function()
{
  $('.btn2').css({'background-color': 'rgb(10, 136, 43)'});
})
        
    })
    
 
 
/* Show sign Up form on button click */
 
$('.signUpBtn').click(function(){
  $('.login').hide();
  $('.signUp').show();
  /* border bottom on button click */
  $('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});
   /* remove border after click */
   $('.loginBtn').css({'border-style' : 'none'});
});
  </script>


<script>
    function formValidator()
    {
        var mail = document.getElementById("email");
        var add = document.getElementById("address");
        var user = document.getElementById("username");
        var pass = document.getElementById("password");
        var conpass=document.getElementById("confirmpassword");

        if(isAlphabet(user, "Please enter only letters for your Username"))
        {
            if(emailValidator(mail, "Please enter a valid email address"))
            {  
                
                  if(Numeric(pass,"Only numeric passwords are allowed!"))
                  {
                    if(pass!=conpass)
                    {
                      return true;
                    }
                    
                  }      
                
            }

        }
        return false;
    }
    
    function isAlphabet(elem, helperMsg){       
	var alphaExp = /^[a-zA-Z]+$/;   
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){     
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function Numeric(elem, helperMsg){     
	var num = /^[0-9]+$/;
	if(elem.value.match(num)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function emailValidator(elem, helperMsg){
	
	var emailExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
</script>

</head>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Satisfy&family=Tillana:wght@500&display=swap" rel="stylesheet">
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn"><h2 style="font-family: 'Satisfy', cursive;
font-family: 'Tillana', cursive;font-size: 30px;">SIGN UP</h2></button>
        <!--<button class="loginBtn" style="display:none;">LOG IN</button>-->
      </div>
      <form class="signUp" action="Signin.php" method="post" onsubmit="return formValidator()">
      <?php include('errors.php'); ?>
        <div class="formGroup">
          <input type="text" id="username" placeholder="User Name" name="username" required value="<?php echo $username; ?>">
        </div>
        <div class="formGroup">
          <input type="email" id="email" placeholder="Email ID" name="email" required value="<?php echo $email; ?>">
        </div>
        <div class="formGroup">
            <input type="text" id="address" placeholder="Address" name="address" required value="<?php echo $address; ?>">
          </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" name="password" required value="<?php echo $password_1; ?>">
        </div>
        <div class="formGroup">
          <input type="password" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required value="<?php echo $password_2; ?>">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="submit" class="btn2" name="reg_user" style="background-color: rgb(10, 136, 43);color: white;">Register</button>
        </div>
        <br>
        <div class="formGroup">
          <span class="message" style="color:white;font-size:15px;font-style:italic">Already a member? <a href="Login.php" style="color:white;">Login Here</a> </span>
        </div>
        
      </form>
      <!------ Login Form -------- -->
      <!--
      <form class="login" action="Signin.php" method="post">
      <?php include('errors.php'); ?>
        <div class="formGroup">
            <input type="text" id="username" placeholder="User Name" name="username" required>
          </div>
        
        <div class="formGroup">
          <input type="email" id="email" placeholder="Email ID" name="email" required >
        </div>
    
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" name="password" required >
        </div>

        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">Keep me signed in on this device</span>
        </div>

        <div class="formGroup">
          <button type="submit" class="btn2" name="login_user" style="background-color: rgb(10, 136, 43);color: white;">Login</button>
        </div>
 
      </form>
-->
 
    </div>
  </div>
 
  
</body>
 
</html>