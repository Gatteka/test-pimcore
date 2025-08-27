<?php

namespace Test\Domain\Model;

use Pimcore\Logger;
use Pimcore\Model\AbstractModel;

// Model for our entity
class Filter extends AbstractModel
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var int
     */
    public int $productId;

    /**
     * @var int
     */
    public int $categoryId;

    /**
     * @var array
     */
    public array $color;

    /**
     * @var int
     */
    public int $type;

    /**
     * get filter by filter id
     *
     * @param int $id
     * @return null|self
     */
    public static function getById($id) {
        try {
            $obj = new self;
            $obj->getDao()->getById($id);
            return $obj;
        }
        catch (\Exception $ex) {
            Logger::warn("ID $id not found.");
        }
 
        return null;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
        return;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
        return;
    }

    /**
     * @return array
     */
    public function getColor(): array
    {
        return $this->color;
    }
    
    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }
    
}
