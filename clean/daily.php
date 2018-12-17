<?php include 'config.php'?>
<?php
    
$today = date('l');

//echo $today;
//die;
    
    
    ?>
<?php include 'header.php'?>

<p><?=$today?>'s special is Cappuccino!</p>  
<p><?=$today?>Monday's special is Pumpkin spice!</p>  
<p><?=$today?>Tuesday's special is Americano!</p>  
<p><?=$today?>Wednesday's special is Latte!</p>  
<p><?=$today?>Thursday's special is Espresso!</p>  
<p><?=$today?>Friday's special is Mocha!</p>  
<p><?=$today?>Saturday's special is Macciato!</p>  

<p>Click below to find out what awesome flavors we have for each day of the week! </p>
<p><a href ="daily.php?day=Sunday">Sunday</a></p>

<?php include 'footer.php'?>