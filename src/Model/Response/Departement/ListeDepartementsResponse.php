<?php

/*
 * This file is part of the geo-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Response\Departement;

use WBW\Library\GeoAPI\Model\AbstractResponse;
use WBW\Library\GeoAPI\Model\Departement;

/**
 * Liste départements response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Response\Departement
 */
class ListeDepartementsResponse extends AbstractResponse {

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
     * @return ListeDepartementsResponse Returns this liste département response.
     */
    public function addDepartement(Departement $departement) {
        $this->departements[] = $departement;
        return $this;
    }

    /**
     * Get the départements.
     *
     * @return Departement[] Returns the départements.
     */
    public function getDepartements() {
        return $this->departements;
    }

    /**
     * Set the départements.
     *
     * @param Departement[] $departements The départements.
     * @return ListeDepartementsResponse Returns this liste départements response.
     */
    protected function setDepartements(array $departements) {
        $this->departements = $departements;
        return $this;
    }
}