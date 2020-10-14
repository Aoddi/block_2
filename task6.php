<?php

$studentsCount = rand(1, 1000000);

$str = (string) $studentsCount;

if (substr($str, -2, 1) == 1) {
    var_dump("На учебе $studentsCount студентов");
} else {

    switch (substr($str, -1)) {
        case 1:
            var_dump("На учебе $studentsCount студент");
            break;
        case 2:
        case 3:
        case 4:
            var_dump("На учебе $studentsCount студента");
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 0:
            var_dump("На учебе $studentsCount студентов");
    }
} 