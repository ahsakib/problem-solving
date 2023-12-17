<!-- 
###########################################----Start----###########################################   
1. question
---------------

Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero. Print the decimal value of each fraction on a new line with 6 places after the decimal.

Note: This challenge introduces precision problems. The test cases are scaled to six decimal places, though answers with absolute error of up to 10^-4 are acceptable.

Example

arr = [1,1,0,-1,-1]

There are n = 5 elements, two positive, two negative and one zero. Their ratios are 2/5=0.400000, 2/5=0.400000 and 1/5=0.200000. Results are printed as:

0.400000

0.400000

0.200000

Function Description

Complete the plusMinus function in the editor below.

plusMinus has the following parameter(s):

int arr[n]: an array of integers
Print

Print the ratios of positive, negative and zero values in the array. Each value should be printed on a separate line with 6 digits after the decimal. The function should not return a value.

Input Format

The first line contains an integer, n, the size of the array.

The second line contains n space-separated integers that describe .

Constraints

0 < n <= 100
-100 <= arr[i] <= 100


Output Format

Print the following 3 lines, each to 6 decimals:

1. proportion of positive values
2. proportion of negative values
3. proportion of 

Sample Input

STDIN           Function
-----           --------
6               arr[] size n = 6
-4 3 -9 0 4 1   arr = [-4, 3, -9, 0, 4, 1]

Sample Output

0.500000
0.333333
0.166667
###########################################----finished----###########################################
 -->

<?php

function plusMinus($arr){
    $pos=0;
    $neg=0;
    $zero=0;
    $len=count($arr);
    foreach($arr as $num){
        if($num > 0){
            $pos++;
        }elseif($num<0){
            $neg++;
        }else{
            $zero++;
        }
    }

    print number_format($pos/$len,6).PHP_EOL;
    print number_format($neg/$len,6).PHP_EOL;
    print number_format($zero/$len,6).PHP_EOL;
}

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
$arr = array_map('intval', explode(' ', fgets($stdin)));
plusMinus($arr);
fclose($stdin);

?>