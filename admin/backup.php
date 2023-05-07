<?php
// Establish database connection
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'OPD';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Error' . mysqli_connect_error());
}

// Define backup file name
$date = date('Y-m-d_H-i-s');
$backup_file = $database.'_'.$date.'.sql';

// Define backup directory
$backup_dir = '../backup/';

// Define mysqldump command to create backup
$command = "mysqldump --user={$username} --password={$password} --host={$server} {$database} > {$backup_dir}{$backup_file}";

// Execute mysqldump command to create backup
system($command);

// Set headers to download backup file
header('Content-Disposition: attachment; filename="'.$backup_file.'"');
header('Content-Type: application/octet-stream');
header('Content-Length: ' . filesize($backup_dir.$backup_file));

// Send backup file contents to browser
readfile($backup_dir.$backup_file);

// Exit script
exit;
?>
