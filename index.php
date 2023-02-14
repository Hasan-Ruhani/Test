<?php
    $students = [
        [
        'name' => 'Hasan',
        'age' => 22
        ],
        [
        'name' => 'Masud',
        'age' => 20
        ],
        [
        'name' => 'Ruhani',
        'age' => 25
        ],
        [
        'name' => 'Abul',
        'age' => 30
        ]
    ];

    function displayStudent($st){
        // echo $st['name']."-".$st['age']."\n";
        echo "{$st['name']} - {$st['age']} \n" ;
    }
    foreach($students as $student){
        displayStudent($student);
        // echo $student['name']."-".$student['age']."\n";
    }