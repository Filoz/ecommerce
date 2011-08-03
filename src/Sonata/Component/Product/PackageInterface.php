<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Product;

interface PackageInterface
{
    /**
     * Set productId
     *
     * @param integer $productId
     */
    function setProductId($productId);

    /**
     * Get productId
     *
     * @return integer $productId
     */
    function getProductId();

    /**
     * Set width
     *
     * @param decimal $width
     */
    function setWidth($width);

    /**
     * Get width
     *
     * @return decimal $width
     */
    function getWidth();

    /**
     * Set height
     *
     * @param decimal $height
     */
    function setHeight($height);

    /**
     * Get height
     *
     * @return decimal $height
     */
    function getHeight();

    /**
     * Set length
     *
     * @param decimal $length
     */
    function setLength($length);

    /**
     * Get length
     *
     * @return decimal $length
     */
    function getLength();

    /**
     * Set weight
     *
     * @param decimal $weight
     */
    function setWeight($weight);

    /**
     * Get weight
     *
     * @return decimal $weight
     */
    function getWeight();

    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    function getEnabled();

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Get updatedAt
     *
     * @return datetime $updatedAt
     */
    function getUpdatedAt();

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Get createdAt
     *
     * @return datetime $createdAt
     */
    function getCreatedAt();
}