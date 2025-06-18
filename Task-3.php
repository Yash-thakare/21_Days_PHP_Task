<!-- find the missing number in the array . -->

<?php
function missing_number($num_list){
    $new_arr = range($num_list[0] , max($num_list));
    return array_diff($new_arr, $num_list);
}

print_r(missing_number(array(1,2,3,4,6,7,8,9)));


?>