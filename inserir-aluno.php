<?php

use Alura\Pdo\Domain\Model\Student;

require 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = new PDO('sqlite:' . $databasePath);

$student = new Student( null,
    "Marcos',''); DROP TABLE students; -- Dias",
    new DateTimeImmutable('2002-08-05') );

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES (?,?);";

$stmt = $pdo->prepare($sqlInsert);
$name = $student->name();
$stmt->bindParam(1, $name);
$format = $student->birthDate()->format('Y-m-d');
$stmt->bindParam(2, $format);

if ($stmt->execute()) {
    echo 'Inserido';
}

