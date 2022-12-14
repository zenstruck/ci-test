<?php

/*
 * This file is part of the zenstruck/ci-test package.
 *
 * (c) Kevin Bond <kevinbond@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zenstruck\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class FooTest extends TestCase
{
    /**
     * @test
     */
    public function foo(): void
    {
        $this->assertTrue(true);
    }
}
