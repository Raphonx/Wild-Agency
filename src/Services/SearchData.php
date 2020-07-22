<?php


namespace App\Services;


class SearchData
{
    /**
     * @var string
     */
    public $q = '';

    /**
     * @var array
     */
    public $type = [];

    /**
     * @var int|null
     */
    public $minPrice;

    /**
     * @var int|null
     */
    public $maxPrice;

    /**
     * @var int|null
     */
    public $minArea;

    /**
     * @var int|null
     */
    public $maxArea;


}