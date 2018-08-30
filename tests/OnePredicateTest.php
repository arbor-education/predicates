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
 * Test Dutek\Predicate\OnePredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class OnePredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testEmptyPredicatesCollectionEvaluatesToFalse()
    {
        $onePredicate = $this->getPredicateInstance();
        $this->assertFalse($onePredicate(null));
    }

    public function testSingleTruePredicateEvaluatesToTrue()
    {
        $onePredicate = $this->getPredicateInstance(true);
        $this->assertTrue($onePredicate(null));
    }

    public function testSingleFalsePredicateEvaluatesToFalse()
    {
        $onePredicate = $this->getPredicateInstance(false);
        $this->assertFalse($onePredicate(null));
    }

    public function testMultipleTruePredicatesEvaluatesToFalse()
    {
        $onePredicate = $this->getPredicateInstance(true, true);
        $this->assertFalse($onePredicate(null));

        $onePredicate = $this->getPredicateInstance(true, true, true);
        $this->assertFalse($onePredicate(null));
    }

    public function testMultipleFalsePredicatesEvaluatesToFalse()
    {
        $onePredicate = $this->getPredicateInstance(false, false);
        $this->assertFalse($onePredicate(null));

        $onePredicate = $this->getPredicateInstance(false, false, false);
        $this->assertFalse($onePredicate(null));
    }

    public function testMultipleFalseAndOneTruePredicatesEvaluatesToTrue()
    {
        $onePredicate = $this->getPredicateInstance(false, true);
        $this->assertTrue($onePredicate(null));

        $onePredicate = $this->getPredicateInstance(false, false, true);
        $this->assertTrue($onePredicate(null));
    }

    public function testMultipleTrueAndAnyFalsePredicatesEvaluatesToFalse()
    {
        $onePredicate = $this->getPredicateInstance(true, true, false);
        $this->assertFalse($onePredicate(null));

        $onePredicate = $this->getPredicateInstance(true, true, true, false);
        $this->assertFalse($onePredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return OnePredicate::class;
    }
}
