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
 * String SIREN trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Traits\Strings
 */
trait StringSirenTrait {

    /**
     * SIREN.
     *
     * @var string|null
     */
    protected $siren;

    /**
     * Get the SIREN.
     *
     * @return string|null Returns the SIREN.
     */
    public function getSiren(): ?string {
        return $this->siren;
    }

    /**
     * Set the SIREN.
     *
     * @param string|null $siren The SIREN.
     * @return self Returns this instance.
     */
    public function setSiren(?string $siren): self {
        $this->siren = $siren;
        return $this;
    }
}
