<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Model;

use WBW\Library\Traits\Integers\IntegerPageTrait;
use WBW\Library\Traits\Integers\IntegerPerPageTrait;

/**
 * Meta.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model
 */
class Meta {

    use IntegerPageTrait;
    use IntegerPerPageTrait;

    /**
     * Total pages.
     *
     * @var int |null
     */
    protected $totalPages;

    /**
     * Total results.
     *
     * @var int |null
     */
    protected $totalResults;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the total pages.
     *
     * @return int|null Returns the total pages.
     */
    public function getTotalPages(): ?int {
        return $this->totalPages;
    }

    /**
     * Get the total results.
     *
     * @return int|null Returns the total results.
     */
    public function getTotalResults(): ?int {
        return $this->totalResults;
    }

    /**
     * Set the total pages.
     *
     * @param int|null $totalPages The total pages.
     * @return Meta Returns this meta.
     */
    public function setTotalPages(?int $totalPages): Meta {
        $this->totalPages = $totalPages;
        return $this;
    }

    /**
     * Set the total results.
     *
     * @param int|null $totalResults The total results.
     * @return Meta Returns this meta.
     */
    public function setTotalResults(?int $totalResults): Meta {
        $this->totalResults = $totalResults;
        return $this;
    }
}
