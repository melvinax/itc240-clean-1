<?php include 'header.php'?>
<?php
    
if(isset($_POST['Name']))
{//data is submitted show data
    //echo $_POST['FirstName'];
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    die;
    */
    
    
    $to	='melvina.mcdaniel@seattlecentral.edu';
    $subject = 'Registration Page';
    //$message = 'hello from ' . $_POST['Name'];
    $message = process_post();
    $replyTo = 'melvinamcdaniel@gmail.com';
    $headers = 'From: noreply@melvinacodes.com' . PHP_EOL .
	'Reply-To: ' . $replyTo . PHP_EOL .
	'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
echo '<p>Thank you for registrating!</p>
        <p><a href="">BACK</a></p>';
    
}else{//show form 
    echo '
        <form action="" method="post" name="sentMessage"
        id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>FirstName</label>
                <input type="text" class="form-control" placeholder="FirstName" name="Name" id="name" required data-validation-required-message="Please enter your first name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>LastName</label>
                <input type="text" class="form-control" placeholder="LastName" name="Name" id="name" required data-validation-required-message="Please enter your Last name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" name="Email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" name="Message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </div>
          </form>
    <form action="" method="post">
        <input type="radio" name="radio" value="Radio 1">Radio 1
        <input type="radio" name="radio" value="Radio 2">Radio 2
        <input type="submit" name="submit" value="Get selected Values" />
        </form>
    <form action="" method="post">
    Which Choice do you need?<br/>
        <input type="checkbox" name="formDoor[]" value="A"/>Choice 1<br />
        <input type="checkbox" name="formDoor[]" value="B"/>Choice 2<br />
        <input type="checkbox" name="formDoor[]" value="C"/>Choice 3
        
        <input type="submit" name="formsubmit" value="Submit" />
        </form>
    ';
}

    
    
    
?>    
<?php include 'footer.php';


function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}



?>













