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
 * String état administratif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringEtatAdministratifTrait {

    /**
     * Etat administratif.
     *
     * @var string|null
     */
    protected $etatAdministratif;

    /**
     * Get the état administratif.
     *
     * @return string|null Returns the état administratif.
     */
    public function getEtatAdministratif(): ?string {
        return $this->etatAdministratif;
    }

    /**
     * Set the état administratif.
     *
     * @param string|null $etatAdministratif The état administratif.
     * @return self Returns this instance.
     */
    public function setEtatAdministratif(?string $etatAdministratif): self {
        $this->etatAdministratif = $etatAdministratif;
        return $this;
    }
}