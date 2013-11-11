<?php
/*
 * This file licensed under the MIT license.
 *
 * (c) Sylvain Mauduit <swop@swop.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AlphaLabs\Common\String;

/**
 * Class String
 *
 * @package AlphaLabs\Common\String
 *
 * @author  Sylvain Mauduit <swop@swop.io>
 */
class String
{
    /**
     * Checks if the input is a string and is not empty
     *
     * @param mixed $input
     *
     * @return bool
     */
    public static function isNotEmptyString($input)
    {
       return is_string($input) && !empty($input);
    }

    /**
     * Checks if the input is a slug
     *
     * @param $input
     *
     * @return bool
     */
    public static function isSlug($input)
    {
        return static::isNotEmptyString($input) && !preg_match('/[^a-z0-9\\-]/', $input);
    }
}
