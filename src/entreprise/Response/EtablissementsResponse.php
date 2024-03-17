<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Response;

use WBW\Library\GouvApi\Entreprise\Model\Etablissement;

/**
 * Etablissements response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Response
 */
class EtablissementsResponse extends AbstractResponse {

    /**
     * Etablissements.
     *
     * @var Etablissement[]
     */
    private $etablissements;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setEtablissements([]);
    }

    /**
     * Add an établisssement.
     *
     * @param Etablissement $etablissement The établissement.
     * @return EtablissementsResponse Returns this établissements response.
     */
    public function addEtablissement(Etablissement $etablissement): EtablissementsResponse {
        $this->etablissements[] = $etablissement;
        return $this;
    }

    /**
     * Get the établissements.
     *
     * @return Etablissement[] Returns the établissements.
     */
    public function getEtablissements(): array {
        return $this->etablissements;
    }

    /**
     * Set the établissements.
     *
     * @param Etablissement[] $etablissements The établissements.
     * @return EtablissementsResponse Returns this établissements response.
     */
    protected function setEtablissements(array $etablissements): EtablissementsResponse {
        $this->etablissements = $etablissements;
        return $this;
    }
}
