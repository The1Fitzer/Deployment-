<?php
 // Connects to your Database
 mysql_connect("a.db.shared.orchestra.io", "user_ce82f697", "vnu&c4)J)f2tGt") or die(mysql_error()); 
 mysql_select_db("db_ce82f697") or die(mysql_error()); 
//checks cookies to make sure they are logged in
 if(isset($_COOKIE['ID_my_site']))
 {
        $username = $_COOKIE['ID_my_site'];
        $pass = $_COOKIE['Key_my_site'];



$result = mysql_query("SELECT * FROM users WHERE username ='$username'") 
 or die(mysql_error());

$info = mysql_fetch_array( $result );
$symbol = $info['stock1'];
$symbol2 = $info['stock2'];
$symbol3 = $info['stock3'];




$check = mysql_query("SELECT * FROM users WHERE username ='$username'")or die(mysql_error());
        while($info = mysql_fetch_array( $check ))
                {

 //if the cookie has the wrong password, they are taken to the login page
                if ($pass != $info['password'])
                        {                       header("Location: login.php");
                        }

 //otherwise they are shown the admin area
        else
                        {      
echo "<h1>";  
echo "Welcome ";echo $username;echo "</h1>";  
echo "<br><br>";

echo "Your tracked stocks below:<p>";


                        }
                }
                }
 else

 //if the cookie does not exist, they are taken to the login screen
 {
 header("Location: login.php");
 }

?>
<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    return curl_exec($ch);
    curl_close ($ch);
}


$csv = "http://download.finance.yahoo.com/d/quotes.csv?s=" . $symbol . "&f=smkjkpo&=.csv";

$yahoo = curl($csv);

$stocks= explode(",",$yahoo);
print_r ($stocks1);
echo '<br />';
print_r ($stocks2);
?>

<table border="7" cellpadding="0" cellspacing="0">
<tr><th>Symbol</th><th>Day's range</th><th>Last Trade</th><th>52 Week Low</th><th>52 Week High</th><th>Open</th><th>Previous Close</th></tr>
<tr>
<?php
foreach($stocks as $val){
echo '<td>'.$val.'</td>';
}
?>
</tr>




<?php
function curl2($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    return curl_exec($ch);
    curl_close ($ch);
}


$csv = "http://download.finance.yahoo.com/d/quotes.csv?s=" . $symbol2 . "&f=smkjkpo&=.csv";

$yahoo = curl($csv);

$stocks= explode(",",$yahoo);
print_r ($stocks1);
echo '<br />';
print_r ($stocks2);
?>


<tr>
<?php
foreach($stocks as $val){
echo '<td>'.$val.'</td>';
}
?>
</tr>

<?php
function curl3($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    return curl_exec($ch);
    curl_close ($ch);
}


$csv = "http://download.finance.yahoo.com/d/quotes.csv?s=" . $symbol3 . "&f=smkjkpo&=.csv";

$yahoo = curl($csv);

$stocks= explode(",",$yahoo);
print_r ($stocks1);
echo '<br />';
print_r ($stocks2);
?>



<tr>
<?php
foreach($stocks as $val){
echo '<td>'.$val.'</td>';
}
?>
</tr>
</table>
<a href=logout.php>Logout</a>
