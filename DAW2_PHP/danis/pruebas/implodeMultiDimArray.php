<?php

$array = array(array('job_type'=>'Administrative / Clerical Jobs'),
    array('job_type' => 'Accounting / Finance jobs'),
    array('job_type' => 'Architecture Jobs'),
    array('job_type' => 'Art and Design Jobs'));

echo '<pre>';
print_r($array);
echo '</pre>';

$t = '';
foreach($array as $val){
    if(is_array($val)){
        $t .= $val['job_type'].',';
    }
}
print substr ( $t , 0 , strlen($t) -1 );

echo "<h1>OTRO</h1>";

function GetJobType($e)
{
    return $e['job_type'];
}

echo implode(', ', array_map('GetJobType', $array));

echo "<h1>OTRO</h1>";

function myfunction($num)
{
    return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

?>