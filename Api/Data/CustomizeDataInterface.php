<?php

namespace Chilliapple\Customizeproducts\Api\Data;

use Magento\Framework\Model\AbstractExtensibleModel;

/**
 * Customize Data interface
 *
 * @api
 */
interface CustomizeDataInterface
    extends \Magento\Framework\Api\ExtensibleDataInterface
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getProductId();

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getImage();

    /**
     * @param string $image
     * @return $this
     */
    public function setImage($image);

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition($position);
    
}