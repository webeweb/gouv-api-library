<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Entreprise\Tests;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Logger mock.
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
    }
}
