<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = 0;
        $count = count($grades);

        foreach ($grades as $subject => $grade) {
            $total += $grade;
        }

        $averageGrade = ($count > 0) ? $total / $count : 0;
        echo "Average grade for student $student: $averageGrade\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 90, 'Science' => 78),
    'Student2' => array('Math' => 92, 'English' => 88, 'Science' => 91),
    'Student3' => array('Math' => 78, 'English' => 84, 'Science' => 87)
);

calculateAverageGrades($studentGrades);
?>
