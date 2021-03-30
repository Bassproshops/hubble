<?PHP
function connectDb(){
$host = 'localhost';
$password = '';
$user = 'root';


$db = New mysqli($host, $user, $password);

if(!$db){
    echo 'error';
    exit;
}
return $db;
}






















