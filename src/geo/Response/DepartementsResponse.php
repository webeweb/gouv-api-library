<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Geo\Response;

use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Geo\Model\Departement;

/**
 * Départements response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Response
 */
class DepartementsResponse extends AbstractResponse {

    /**
     * Départements.
     *
     * @var Departement[]
     */
    private $departements;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setDepartements([]);
    }

    /**
     * Add a département.
     *
     * @param Departement $departement The département.
     * @return DepartementsResponse Returns this départements response.
     */
    public function addDepartement(Departement $departement): DepartementsResponse {
        $this->departements[] = $departement;
        return $this;
    }

    /**
     * Get the départements.
     *
     * @return Departement[] Returns the départements.
     */
    public function getDepartements(): array {
        return $this->departements;
    }

    /**
     * Set the départements.
     *
     * @param Departement[] $departements The départements.
     * @return DepartementsResponse Returns this départements response.
     */
    protected function setDepartements(array $departements): DepartementsResponse {
        $this->departements = $departements;
        return $this;
    }
}
