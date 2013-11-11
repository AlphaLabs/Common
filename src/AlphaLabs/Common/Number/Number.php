<?php
/*
 * This file licensed under the MIT license.
 *
 * (c) Sylvain Mauduit <swop@swop.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AlphaLabs\Common\Number;

/**
 * Class Number
 *
 * @package AlphaLabs\Common\Number
 *
 * @author  Sylvain Mauduit <swop@swop.io>
 */
class Number
{
    /**
     * Checks if the given input is an integer
     *
     * @param mixed $input
     *
     * @return bool
     */
    public static function isInteger($input)
    {
        return is_int($input) || (is_numeric($input) && !is_float($input));
    }

    /**
     * Checks if the given input is a positive (>= 0) integer
     *
     * @param mixed $input
     *
     * @return bool
     */
    public static function isPositiveInteger($input)
    {
        return static::isInteger($input) && 0 <= intval($input);
    }

    /**
     * Checks if the given input is a strict positive (> 0) integer
     *
     * @param $input
     *
     * @return bool
     */
    public static function isStrictlyPositiveInteger($input)
    {
        return static::isInteger($input) && 0 < intval($input);
    }
}
