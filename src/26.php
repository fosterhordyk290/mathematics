<?php
// This PHP code is designed to demonstrate basic operations with arrays.
// It contains an array named 'students' where each element is a student's name and age.

$students = [
    ['Alice', 21],
    ['Bob', 19],
    ['Charlie', 25],
];

function printStudents($students) {
    echo "Student Names: ";
    foreach ($students as $student) {
        echo $student[0] . ", " . $student[1] . "\n";
    }
}

printStudents($students);
?>
