<?php
/**
 * This file is part of the predicates package.
 *
 * Copyright (c) dutekvejin
 *
 * For full copyright and license information, please refer to the LICENSE file,
 * located at the package root folder.
 */

namespace Dutek\Predicate;

/**
 * Test Dutek\Predicate\EmptyPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class EmptyPredicateTest extends AbstractPredicateTestCase
{
    /**
     * @dataProvider valueDataProvider
     * @param mixed $value
     * @param bool $expect
     */
    public function testValue($value, bool $expect)
    {
        $emptyPredicate = $this->getPredicateInstance();
        $this->assertEquals($expect, $emptyPredicate($value));
    }

    public function valueDataProvider(): array
    {
        return [
            [null, true],
            [false, true],
            [0, true],
            ["", true],
            [[], true],

            [true, false],
            [1, false],
            [0.5, false],
            ["str", false],
            [[1], false],
            [new \stdClass(), false],
        ];
    }

    protected function getPredicateClassName(): string
    {
        return EmptyPredicate::class;
    }
}
