<?php
/*
 * This file licensed under the MIT license.
 *
 * (c) Sylvain Mauduit <swop@swop.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AlphaLabs\Common\AttributeBag;

/**
 * Attributes store
 *
 * @author Drak <drak@zikula.org>
 * @author Sylvain Mauduit <sopw@swop.io>
 */
interface AttributeBagInterface
{
    /**
     * Checks if an attribute is defined.
     *
     * @param string $name The attribute name
     *
     * @return Boolean true if the attribute is defined, false otherwise
     */
    public function has($name);

    /**
     * Returns an attribute.
     *
     * @param string $name    The attribute name
     * @param mixed  $default The default value if not found.
     *
     * @return mixed
     */
    public function get($name, $default = null);

    /**
     * Sets an attribute.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function set($name, $value);

    /**
     * Returns attributes.
     *
     * @return array Attributes
     */
    public function all();

    /**
     * Sets attributes.
     *
     * @param array $attributes Attributes
     */
    public function replace(array $attributes);

    /**
     * Removes an attribute.
     *
     * @param string $name
     *
     * @return mixed The removed value
     */
    public function remove($name);

    /**
     * Gets this bag's name
     *
     * @return string
     */
    public function getName();

    /**
     * Initializes the Bag
     *
     * @param array $array
     */
    public function initialize(array &$array);

    /**
     * Clears out data from bag.
     *
     * @return mixed Whatever data was contained.
     */
    public function clear();
}

