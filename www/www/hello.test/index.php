<h1>Hello, mate!<h1>
<h4>Attemting MySQL connection from php</h4>
<?php
$host = 'mysql';
$host = 'root';
$host = 'secret';
$conn = new mysqli($host, $uswer, $pass);

if ($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}
echo "Connected to MySQL successfully!";
?>
