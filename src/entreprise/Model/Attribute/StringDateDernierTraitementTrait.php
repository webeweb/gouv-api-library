<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Model\Attribute;

/**
 * String date dernier traitement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Model\Attribute
 */
trait StringDateDernierTraitementTrait {

    /**
     * Date dernier traitement.
     *
     * @var string|null
     */
    protected $dateDernierTraitement;

    /**
     * Get the date dernier traitement.
     *
     * @return string|null Returns the date dernier traitement.
     */
    public function getDateDernierTraitement(): ?string {
        return $this->dateDernierTraitement;
    }

    /**
     * Set the date dernier traitement.
     *
     * @param string|null $dateDernierTraitement The date dernier traitement.
     * @return self Returns this instance.
     */
    public function setDateDernierTraitement(?string $dateDernierTraitement): self {
        $this->dateDernierTraitement = $dateDernierTraitement;
        return $this;
    }
}