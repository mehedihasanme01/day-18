<?php


class Demo
{
    public function demo(){
        if (isset($_POST['btn']))
        {
            $firstNumber = $_POST['first_number'];
            $lastNumber = $_POST['last_number'];
            $radio = $_POST['check'];
            $result ='';

            if($firstNumber<$lastNumber)
            {
                for ($i=$firstNumber; $i<=$lastNumber; $i++)
                {
                    if($i % 2 !=0 && $radio=='odd')
                    {
                        $result .= $i.' '; //$result=$result$i''
                    }

                }
            }

            return $result;
        }
    }

}