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
 * Test Dutek\Predicate\NullPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class NullPredicateTest extends AbstractPredicateTestCase
{
    public function testNullValueEvaluatesToTrue()
    {
        $nullPredicate = $this->getPredicateInstance();
        $this->assertTrue($nullPredicate(null));
    }

    public function testNotNullValueEvaluatesToFalse()
    {
        $nullPredicate = $this->getPredicateInstance();
        $this->assertFalse($nullPredicate(''));
    }

    protected function getPredicateClassName() : string
    {
        return NullPredicate::class;
    }
}
