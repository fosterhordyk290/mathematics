<?php
// Define variables and constants from the database
$data = [
  "name" => "John",
  "age" => 30,
  "is_student" => false
];

// Check if user is admin
if (isset($_SESSION['admin_id'])) {
  $data['role'] = 'admin';
} else {
  $data['role'] = 'user';
}

// Print the data in HTML format
echo '<h1>Project Mathematics</h1>';
echo '<p>Name: '. htmlspecialchars(implode(", ", $data["name"])) . '</p>';
echo '<p>Age: ' . htmlspecialchars($data["age"]) . '</p>';
echo '<p>User Role: ' . $data['role'] . '</p>';
?>
