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
 * Test Dutek\Predicate\AllPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class AllPredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testEmptyPredicatesCollectionEvaluatesToTrue()
    {
        $allPredicate = $this->getPredicateInstance();
        $this->assertTrue($allPredicate(null));
    }

    public function testSingleTruePredicateEvaluatesToTrue()
    {
        $allPredicate = $this->getPredicateInstance(true);
        $this->assertTrue($allPredicate(null));
    }

    public function testSingleFalsePredicateEvaluatesToFalse()
    {
        $allPredicate = $this->getPredicateInstance(false);
        $this->assertFalse($allPredicate(null));
    }

    public function testMultipleTruePredicatesEvaluatesToTrue()
    {
        $allPredicate = $this->getPredicateInstance(true, true);
        $this->assertTrue($allPredicate(null));

        $allPredicate = $this->getPredicateInstance(true, true, true);
        $this->assertTrue($allPredicate(null));
    }

    public function testMultipleFalsePredicatesEvaluatesToFalse()
    {
        $allPredicate = $this->getPredicateInstance(false, false);
        $this->assertFalse($allPredicate(null));

        $allPredicate = $this->getPredicateInstance(false, false, false);
        $this->assertFalse($allPredicate(null));
    }

    public function testMultipleTrueAndFalsePredicatesEvaluatesToFalse()
    {
        $allPredicate = $this->getPredicateInstance(false, true);
        $this->assertFalse($allPredicate(null));

        $allPredicate = $this->getPredicateInstance(false, true, true);
        $this->assertFalse($allPredicate(null));

        $allPredicate = $this->getPredicateInstance(true, false);
        $this->assertFalse($allPredicate(null));

        $allPredicate = $this->getPredicateInstance(true, false, false);
        $this->assertFalse($allPredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return AllPredicate::class;
    }
}
