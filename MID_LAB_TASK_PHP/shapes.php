<?php
/*function pypart($n)
{

    for ($i = 0; $i < $n; $i++)
    {

        for($j = 0; $j <= $i; $j++ )
        {
            echo "* ";
        }
        echo "\n";
    }
}
    $n = 3;
    pypart($n);*/
/*function numpat($n)
{
    $num = 1;

    for ($i = 0; $i < $n; $i++)
    {
  
        for ($j = 0; $j <= $i; $j++ )
        {
   
            echo $num." ";
 
            $num = $num + 1;
        }
  
        echo "\n";
    }
}
  
    $n = 3;
    numpat($n);*/

    function contalpha($n)
{
    $num = 65;

    for ($i = 0; $i < $n; $i++)
    {

        for ($j = 0; $j <= $i; $j++ )
        {

            $ch = chr($num);
            echo $ch." ";  
            $num = $num + 1;
        }
        echo "\n";
    }
}
    $n = 3;
    contalpha($n);



?>
