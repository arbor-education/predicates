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
 * Test Dutek\Predicate\AndPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class AndPredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testTrueAndFalsePredicatesEvaluatesToFalse()
    {
        $andPredicate = $this->getPredicateInstance(true, false);
        $this->assertFalse($andPredicate(null));
    }

    public function testFalseAndTruePredicatesEvaluatesToFalse()
    {
        $andPredicate = $this->getPredicateInstance(false, true);
        $this->assertFalse($andPredicate(null));
    }

    public function testBothFalsePredicatesEvaluatesToFalse()
    {
        $andPredicate = $this->getPredicateInstance(false, false);
        $this->assertFalse($andPredicate(null));
    }

    public function testBothTruePredicatesEvaluatesToTrue()
    {
        $andPredicate = $this->getPredicateInstance(true, true);
        $this->assertTrue($andPredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return AndPredicate::class;
    }
}
