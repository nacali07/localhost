<!DOCTYPE html> 
 <head>
   <title>Welcome</title>
   <link type="text/css" rel="stylesheet" href="../../../bootstrap/css/bootstrap.css"/>
	
 </head>

 <body>
	<div class="hero-unit">
 	<center> <h2>Welcome to SergeiSurv</h2></center>
   	<p>Sergei Surv is a web application that allows users to make and take surveys.</br> The owner can then review the results</p>
   	<h4>Please Login to Continue</h4>
   <?php echo validation_errors(); ?>
   <?php 
	$attributes = array('class' => 'well span6');
	echo form_open('verifylogin'); ?>
      <label>Username</label>
     <input type="text" class ="span3" id="username" placeholder="Type your username here..." name="username"/>
     <br/>
     <label>Password</label>
     <input type="password" class="span3" id="password" placeholder="Type your password here..." name="password"/><br />
     <button class="btn btn-primary btn-large">Login</button>
   </form>
</div>
 </body>
</html>

