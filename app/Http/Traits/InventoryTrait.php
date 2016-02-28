<?php

namespace App\Http\Traits;

//use Helper;
use Illuminate\Database\Eloquent\Model;

trait InventoryTrait
{
    /*
     * Common Helper Methods
     */
    use BaseTrait;


    abstract public function category();

    abstract public function costs();

    abstract public function pictures();

    abstract public function details();

    abstract public function barcode();

    abstract public function stocks();

    abstract public function supplier();

    /**
     * Overrides the models boot function
     */
    public static function bootInventoryTrait()
    {
       
    }

    /**
     * Returns an item record by the specified SKU code.
     *
     * @param string $sku
     *
     * @return bool
     */
    public static function findByBarcode($barcode)
    {
        /*
         * Create a new static instance
         */
        $instance = new static();

        /*
         * Try and find the Barcode
         */
        $barcode = $instance
            ->barcode()
            ->getRelated()
            ->with('tool')
            ->where('barcode', $barcode)
            ->first();

        /*
         * Check if the Barcode was found, and if a tool is
         * attached to the Barcode we'll return it
         */
        if ($barcode && $barcode->tool) {
            return $barcode->tool;
        }

        /*
         * Return false on failure
         */
        return false;
    }

    /**
     * Returns the total sum of the current item stock.
     *
     * @return int|float
     */
    public function getTotalStock()
    {
        $quantity = 0;
        foreach ($this->stocks as $stock)
        {
            $quantity = $quantity + $stock->pivot->quantity;
        }

        return $quantity;
    }

    /**
     * Returns the item's Barcode.
     *
     * @return null|string
     */
    public function getBarcode()
    {
        if ($this->hasBarcode()) {
            return $this->barcode->getAttribute('barcode');
        }

        return;
    }

    /**
     * Returns true/false if it has Barcode
     *
     * @return bool
     */
    public function hasBarcode()
    {
        if ($this->barcode) {
            return true;
        }

        return false;
    }

    /**
     * Returns true/false if it has Category
     *
     * @return bool
     */
    public function hasCategory()
    {
        if ($this->barcode) {
            return true;
        }

        return false;
    }

    /**
     * Returns true/false if the inventory has stock.
     *
     * @return bool
     */
    public function isInStock()
    {
        return ($this->getTotalStock() > 0 ? true : false);
    }
}