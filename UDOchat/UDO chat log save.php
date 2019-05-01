//UDO chat log save

$text =&Post["textPost"];

$conn = new mysqli($text);

if(!$conn){
die("Connetion Failed.".mysqli_connect_error());
}