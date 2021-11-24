<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Response;

use WBW\Library\GouvApi\Adresse\Model\Adresse;
use WBW\Library\GouvApi\Common\Response\AbstractResponse;

/**
 * Adresses response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Response
 */
class AdressesResponse extends AbstractResponse {

    /**
     * Adresses.
     *
     * @var Adresse[]
     */
    private $adresses;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAdresses([]);
    }

    /**
     * Add an adresse.
     *
     * @param Adresse $adresse The adresse.
     * @return AdressesResponse Returns this adresses response.
     */
    public function addAdresse(Adresse $adresse): AdressesResponse {
        $this->adresses[] = $adresse;
        return $this;
    }

    /**
     * Get the adresses.
     *
     * @return Adresse[] Returns the adresses.
     */
    public function getAdresses(): array {
        return $this->adresses;
    }

    /**
     * Set the adresses.
     *
     * @param Adresse[] $adresses The adresses.
     * @return AdressesResponse Returns this adresses response.
     */
    protected function setAdresses(array $adresses): AdressesResponse {
        $this->adresses = $adresses;
        return $this;
    }
}