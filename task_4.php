<?php

$studentGrades = [
    ['Math' => 85, 'English' => 90, 'Science' => 78],
    ['Math' => 89, 'English' => 70, 'Science' => 77],
    ['Math' => 88, 'English' => 80, 'Science' => 71]
];

function calculateGradeAvg(array $studentGrades)
{
    foreach ($studentGrades as $student => $grades) :
        $sum = array_sum($grades);
        $totalItem = count($grades);
        $average = number_format(($sum / $totalItem), 2);

        echo "Student " . ($student + 1) . "'s average grade : {$average}\n";
    endforeach;
}

calculateGradeAvg($studentGrades);
