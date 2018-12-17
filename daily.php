<?php include 'config.php'?>
<?php
    
/*

if day is passed via GET, show $day's coffee

if it's today, shows $today's coffee



place a link to show today's coffee (if on another day)

*/
    
 if(isset($_GET['day']))
 {//if day is passed via GET, show $day's coffee
     
     $day = $_GET['day'];
 }else{//if it's today, shows $today's coffee
     $day = date('l');   
     
 }
     
switch($day){
        
    case 'Monday':
          $coffee = "Pumpkin Spice";
          $pic = 'pumpkin-spice-latte.jpg';
          $alt = 'delicious pumpkin spice!';
    break;
          
     case 'Tuesday':
          $coffee = "Americano";
          $pic = 'americano.jpg';
          $alt = 'spirit americano!';
    break;
        
     case 'Wednesday':
          $coffee = "Latte";
          $pic = 'latte.jpg';
          $alt = 'Humpday latte!';
    break;    
        
     case 'Thursday':
          $coffee = "Espresso";
          $pic = 'espresso.jpg';
          $alt = 'Push threw espresso!';
    break;    
        
     case 'Friday':
          $coffee = "Mocha";
          $pic = 'mocha.jpg';
          $alt = 'get weekend started mocha!';
    break;
        
     case 'Saturday':
          $coffee = "Macciato";
          $pic = 'macciato.jpg';
          $alt = 'delicious macciato...';
    break;    
        
      case 'Sunday':
          $coffee = "Cappuccino";
          $pic = 'cappuccino.jpg';
          $alt = 'Wonderful cappuccino...';
    break;   
        
          
  }

echo "$day's Coffee special is $coffee!"



//$today = date('l');

//echo $today;
//die;
    
    
?>
<?php include 'header.php'?>

<p><?=$day?>'s special is <?=$coffee?>!</p>  
 

<p>Click below to find out what awesome flavors we have for each day of the week!</p>
<p><a href ="daily.php?day=Sunday">Sunday</a></p>
<p><a href ="daily.php?day=Monday">Monday</a></p>
<p><a href ="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href ="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href ="daily.php?day=Thursday">Thursday</a></p>
<p><a href ="daily.php?day=Friday">Friday</a></p>
<p><a href ="daily.php?day=Saturday">Saturday</a></p>


<?php include 'footer.php'?>