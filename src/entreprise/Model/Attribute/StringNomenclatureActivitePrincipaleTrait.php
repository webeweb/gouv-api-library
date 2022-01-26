<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Model\Attribute;

/**
 * String nomenclature activité principale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringNomenclatureActivitePrincipaleTrait {

    /**
     * Nomenclature activité principale.
     *
     * @var string|null
     */
    protected $nomenclatureActivitePrincipale;

    /**
     * Get the nomenclature activité principale.
     *
     * @return string|null Returns the nomenclature activité principale.
     */
    public function getNomenclatureActivitePrincipale(): ?string {
        return $this->nomenclatureActivitePrincipale;
    }

    /**
     * Set the nomenclature activité principale.
     *
     * @param string|null $nomenclatureActivitePrincipale The nomenclature activité principale.
     * @return self Returns this instance.
     */
    public function setNomenclatureActivitePrincipale(?string $nomenclatureActivitePrincipale): self {
        $this->nomenclatureActivitePrincipale = $nomenclatureActivitePrincipale;
        return $this;
    }
}
