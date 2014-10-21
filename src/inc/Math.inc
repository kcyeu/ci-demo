<?php
namespace CI_Demo;

class Math
{
    public function __construct()
    {
    }

    /**
     * Add
     *
     * @param numberic $num1 1st number
     * @param numberic $num2 2nd number
     *
     * @return numberic sum of $num1 and $num2, FALSE for exception
     *
     */
    public function add($num1, $num2)
    {
        if (is_numeric($num1) && is_numeric($num2)) {
             return ($num1 + $num2);
        }
        else
        {
            return false;
        }
    }

    /**
     * Divide
     *
     * @param numberic $num1 1st number
     * @param numberic $num2 2nd number
     *
     * @return numberic quotient of $num1 and $num2, FALSE for exception
     *
     */
    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            return false;
        }

        // TODO: un-comment this to demo phpcs
        /*
        if (is_numeric($num1) && is_numeric($num2))
        {
            return ($num1 / $num2);
        }
        return FALSE;
        */
        if (is_numeric($num1) && is_numeric($num2)) {
            return ($num1 / $num2);
        }
        return false;
    }
}
