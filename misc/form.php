<?php

//Determine requestmethod
$method=$_SERVER['REQUEST_METHOD'];

//If Server request is GET or null, show the form
if (($method=="" || $method=='GET'))  {

?>
	<body>
	<form  action="" method="POST" enctype="multipart/form-data">
	<style>
		form {
		border-width: 12px;
		border-style: solid;
		border-color: indigo;
		margin: auto;
		width: 40%;
		background-color: snow;
		padding: 9px;
		}

		body {
   		 background-color: mistyrose;	
		}

		h1 {
		color: black;
		margin-left: 40px;
		}
	</style>
	<h3 aligh="justify"> Contact Us</h3> <br>
	Please enter your name:<br>
	 <input name="name" type="text" value="" size="50"/><br>
	Your email address:<br>
	<input name="email" type="text" value="" size="50"/><br>
	Your message to us:<br>
	<textarea name="text" rows="20" cols="50"></textarea><br>
	<input type="submit" value="Send It"/>
	</form>
	</body>
	
	<?php
		} 

	//If Server method is POST, check to see if fields are populated
	elseif ($method=='POST') {

		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['text'];

		//If fields are not populated, display error message.
    			if (($email=="")||($message=="")||($name==""))
        			{
		?>
    				<body>
    				<style>
					body {
					background-color: mistyrose;
					}

					h1 {
					color: black;
					margin-left: 40px;
					}
				</style>
				</body>
			<?php
        			echo "Please enter the required information";
        			}

				//If fields are populated, send message and display a copy of the original message sent.
				else{        
					$email=$email .", " ."xxxx@zenit.senecac.on.ca";
					$from="From: $name $email";;
					$subject="Your Message";
					mail($email, $subject, $message, $from);
					echo "Email has been sent!";
					print "<br>";
					echo "Here's a duplicate of what's been sent to you: ";
					print "<br><br>";
			?>
    					<body>
    					<style>
						body {
							
background-color: mistyrose;
						}

						h1 {
						color: black;
						margin-left: 40px;
						}
					</style>
					Name: <?php echo $name; ?><br>
					Email Address: <?php echo $email; ?><br>
					Your Message: <?php echo $message; ?><br>
					</body>

				<?php
        				}
    			}  		
				?> 
