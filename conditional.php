<?php

# Conditionals
/*
 * ==
 * ===
 * <
 * >
 * <=
 * >=
 * !=
 * !==
 */

$num = 15;
//if ($num > 5) {
//    echo '5 passed';
//}
//else {
//    echo '5 not passed';
//}

# Logical operators

/*
 * and &&
 * or ||
 * xor
 */

//if($num > 4 xor $num < 10){
//    echo "$num passed";
//}

# Switch

$favColor = 'bluee';
switch ($favColor) {
    case 'red':
        echo "your favorite coloe is red";
        break;
    
        case 'blue':
        echo "your favorite coloe is blue";
        break;
    
        case 'green':
        echo "your favorite coloe is green";
        break;

    default:
        echo "your favorite coloe is somthing else";
}