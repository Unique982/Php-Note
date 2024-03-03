<!-- Switch Statement in PHP-->
<!-- Check several possible constant value of for an expression 
 syntax: switch($expression){
    case expression 1:
        block of statements1;
        break;
    case expression 2:
        block of statements2;
        break;
 
 default:
 default block of statements
}
// 2nd way
 syntax: switch($expression):
    case expression 1:
        block of statements1;
        break;
    case expression 2:
        block of statements2;
        break;
 
 default:
 default block of statements
endswitch;
-->
<!-- Example -->
<?php 
 $day = 10;
 switch($day){
    case 0:
        echo "Sunday";
        break;
        case 1:
            echo "Monday";
            break;
            case 2:
                echo "Tuesday";
                break;
                case 3:
                    echo "Wednesday";
                    break;
                    case 4 :
                        echo "Thursday";
                        break;
                        case 5:
                            echo "Friday";
                            break ;
                            case 6:
                                echo "Saturday";
                                break;
                                default:
                                echo "invalid day";
 }

 // 2nd exmaple 
 $week = "Wednesday";
 switch($week):
    case "Sunday":
    echo "Sundday";
    break;
    case "Monday":
        echo "Monday";
        break;
        case "Tuseday":
            echo "sun";
            break;
            case "Wednesday":
                echo "wednesday";
                break;
                case "Thursday":
                    echo "Thursday";
                    break;
                    case "Friday":
                        echo "Friday";
                        break;
                    default:
                    echo "invalid day";
                    endswitch;
?>