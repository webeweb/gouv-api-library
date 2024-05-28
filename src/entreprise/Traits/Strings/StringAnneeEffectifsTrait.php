<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Entreprise\Traits\Strings;

/**
 * String année effectifs trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Traits\Strings
 */
trait StringAnneeEffectifsTrait {

    /**
     * Année effectifs.
     *
     * @var string|null
     */
    protected $anneeEffectifs;

    /**
     * Get the année effectifs.
     *
     * @return string|null Returns the année effectifs.
     */
    public function getAnneeEffectifs(): ?string {
        return $this->anneeEffectifs;
    }

    /**
     * Set the année effectifs.
     *
     * @param string|null $anneeEffectifs The année effectifs.
     * @return self Returns this instance.
     */
    public function setAnneeEffectifs(?string $anneeEffectifs): self {
        $this->anneeEffectifs = $anneeEffectifs;
        return $this;
    }
}
