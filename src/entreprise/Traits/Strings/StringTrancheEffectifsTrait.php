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
 * String tranche effectifs trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Traits\Strings
 */
trait StringTrancheEffectifsTrait {

    /**
     * Tranche effectifs.
     *
     * @var string|null
     */
    protected $trancheEffectifs;

    /**
     * Get the tranche effectifs.
     *
     * @return string|null Returns the tranche effectifs.
     */
    public function getTrancheEffectifs(): ?string {
        return $this->trancheEffectifs;
    }

    /**
     * Set the tranche effectifs.
     *
     * @param string|null $trancheEffectifs The tranche effectifs.
     * @return self Returns this instance.
     */
    public function setTrancheEffectifs(?string $trancheEffectifs): self {
        $this->trancheEffectifs = $trancheEffectifs;
        return $this;
    }
}
