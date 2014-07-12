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
 * Stores attributes and offers useful methods to retrieve attributes form it.
 *
 * This class is based on the Session Attribute bag of the HttpFoundation Symfony component.
 *
 * @package AlphaLabs\Common\AttributeBag
 *
 * @author  Sylvain Mauduit <swop@swop.io>
 * @author  Fabien Potencier <fabien@symfony.com>
 */
class AttributeBag implements AttributeBagInterface, \IteratorAggregate, \Countable
{
    /** @var string */
    private $name = 'attributes';

    /** @var array */
    protected $attributes = array();

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the bag name
     *
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &$attributes)
    {
        $this->attributes = &$attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function has($name)
    {
        return array_key_exists($name, $this->attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function get($name, $default = null)
    {
        return array_key_exists($name, $this->attributes) ? $this->attributes[$name] : $default;
    }

    /**
     * {@inheritdoc}
     */
    public function set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return $this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array $attributes)
    {
        $this->attributes = array();
        foreach ($attributes as $key => $value) {
            $this->set($key, $value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function remove($name)
    {
        $retval = null;
        if (array_key_exists($name, $this->attributes)) {
            $retval = $this->attributes[$name];
            unset($this->attributes[$name]);
        }

        return $retval;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $return = $this->attributes;
        $this->attributes = array();

        return $return;
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \ArrayIterator An \ArrayIterator instance
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->attributes);
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public function count()
    {
        return count($this->attributes);
    }
}
