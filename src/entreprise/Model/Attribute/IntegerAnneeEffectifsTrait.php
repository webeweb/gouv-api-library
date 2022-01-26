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
 * Integer année effectifs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait IntegerAnneeEffectifsTrait {

    /**
     * Année effectifs.
     *
     * @var int|null
     */
    protected $anneeEffectifs;

    /**
     * Get the année effectifs.
     *
     * @return int|null Returns the année effectifs.
     */
    public function getAnneeEffectifs(): ?int {
        return $this->anneeEffectifs;
    }

    /**
     * Set the année effectifs.
     *
     * @param int|null $anneeEffectifs The année effectifs.
     * @return self Returns this instance.
     */
    public function setAnneeEffectifs(?int $anneeEffectifs): self {
        $this->anneeEffectifs = $anneeEffectifs;
        return $this;
    }
}
