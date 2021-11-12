<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Calendrier\Response;

use WBW\Library\GouvAPI\Calendrier\Model\JourFerie;
use WBW\Library\GouvAPI\Common\Response\AbstractResponse;

/**
 * Jours fériés response.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Calendrier\Response
 */
class JoursFeriesResponse extends AbstractResponse {

    /**
     * Jours fériés.
     *
     * @var JourFerie[]
     */
    private $joursFeries;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setJoursFeries([]);
    }

    /**
     * Add a jour férié.
     *
     * @param JourFerie $jourFerie The jour férié.
     * @return JoursFeriesResponse Returns this jours fériés response.
     */
    public function addJourFerie(JourFerie $jourFerie): JoursFeriesResponse {
        $this->joursFeries[] = $jourFerie;
        return $this;
    }

    /**
     * Get the jours fériés.
     *
     * @return JourFerie[] Returns the jours fériés.
     */
    public function getJoursFeries(): array {
        return $this->joursFeries;
    }

    /**
     * Set the jours fériés.
     *
     * @param JourFerie[] $joursFeries The jours fériés.
     * @return JoursFeriesResponse Returns this jours fériés response.
     */
    protected function setJoursFeries(array $joursFeries): JoursFeriesResponse {
        $this->joursFeries = $joursFeries;
        return $this;
    }
}