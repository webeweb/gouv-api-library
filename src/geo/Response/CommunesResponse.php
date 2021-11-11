<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Response;

use WBW\Library\GouvAPI\Common\Response\AbstractResponse;
use WBW\Library\GouvAPI\Geo\Model\Commune;

/**
 * Communes response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Response
 */
class CommunesResponse extends AbstractResponse {

    /**
     * Communes.
     *
     * @var Commune[]
     */
    private $communes;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setCommunes([]);
    }

    /**
     * Add a commune.
     *
     * @param Commune $commune The commune.
     * @return CommunesResponse Returns this communes response.
     */
    public function addCommune(Commune $commune): CommunesResponse {
        $this->communes[] = $commune;
        return $this;
    }

    /**
     * Get the communes.
     *
     * @return Commune[] Returns the communes.
     */
    public function getCommunes(): array {
        return $this->communes;
    }

    /**
     * Set the communes.
     *
     * @param Commune[] $communes The communes.
     * @return CommunesResponse Returns this communes response.
     */
    protected function setCommunes(array $communes): CommunesResponse {
        $this->communes = $communes;
        return $this;
    }
}