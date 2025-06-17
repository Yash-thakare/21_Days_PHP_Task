<!-- Problem:-  Check whether a given positive integer is a power of two -->

<?php

function isPowerOfTwo($n){

    if(($n& ($n-1))==0){

        return "$n is a power of two";
    }
    else{
        return "$n is a  not power of two";
    }
}



print_r(isPowerOfTwo(8)."\n"); //8 is a power of two
print_r(isPowerOfTwo(10)."\n");//10 is a  not power of two


?>