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
 * String updated at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringUpdatedAtTrait {

    /**
     * Updated at.
     *
     * @var string|null
     */
    protected $updatedAt;

    /**
     * Get the updated at.
     *
     * @return string|null Returns the updated at.
     */
    public function getUpdatedAt(): ?string {
        return $this->updatedAt;
    }

    /**
     * Set the updated at.
     *
     * @param string|null $updatedAt The updated at.
     * @return self Returns this instance.
     */
    public function setUpdatedAt(?string $updatedAt): self {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}
