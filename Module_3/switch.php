<?php
// $age = 27;

// switch ($age){
//     case ($age >= 0 && $age < 18):
//         echo "You are a minor (0-18 years old) <br>";
//         break;
//     case ($age >= 18 && $age <= 25):
//         echo "You are a young aduld! <br>";
//         break;
//     case ($age > 25):
//         echo "You are an adult <br>";
//         break;
//     default:
//         echo "Invalid age input! <br>";
//         break;
// }

$day = "Monday";

switch ($day){
    case 'Monday':
        echo "It's Monday! Start of the week";
        break;
    case 'Tuesday':
        echo "It;s Tuesday! Keep pushing through!";
        break;
    case 'Wednesday':
        echo "It's Wednesday! Midweek already!";
        break;
    case 'Thursday':
        echo "It's Thurday! Almost there!";
        break;
    case 'Friday':
        echo "It's Friday! Weekend is just around the corner! ";
        break;
    case 'Saturday':
        echo "Its' Saturday! Enjoy your weekend!";
        break;
    case 'Sunday':
        echo "It's Sunday! Rest and recharge!";
        break;
    default:
    echo "Invalid day";
    break;
}
?>