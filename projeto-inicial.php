<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vinicio Lima',
    new \DateTimeImmutable('2002-08-05')
);

echo $student->age();
