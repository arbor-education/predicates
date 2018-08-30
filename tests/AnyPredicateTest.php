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
 * Test Dutek\Predicate\AnyPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class AnyPredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testEmptyPredicatesCollectionEvaluatesToFalse()
    {
        $anyPredicate = $this->getPredicateInstance();
        $this->assertFalse($anyPredicate(null));
    }

    public function testSingleTruePredicateEvaluatesToTrue()
    {
        $anyPredicate = $this->getPredicateInstance(true);
        $this->assertTrue($anyPredicate(null));
    }

    public function testSingleFalsePredicateEvaluatesToFalse()
    {
        $anyPredicate = $this->getPredicateInstance(false);
        $this->assertFalse($anyPredicate(null));
    }

    public function testMultipleTruePredicatesEvaluatesToTrue()
    {
        $anyPredicate = $this->getPredicateInstance(true, true);
        $this->assertTrue($anyPredicate(null));

        $anyPredicate = $this->getPredicateInstance(true, true, true);
        $this->assertTrue($anyPredicate(null));
    }

    public function testMultipleFalsePredicatesEvaluatesToFalse()
    {
        $anyPredicate = $this->getPredicateInstance(false, false);
        $this->assertFalse($anyPredicate(null));

        $anyPredicate = $this->getPredicateInstance(false, false, false);
        $this->assertFalse($anyPredicate(null));
    }

    public function testMultipleTrueAndFalsePredicatesEvaluatesToTrue()
    {
        $anyPredicate = $this->getPredicateInstance(false, true);
        $this->assertTrue($anyPredicate(null));

        $anyPredicate = $this->getPredicateInstance(false, true, true);
        $this->assertTrue($anyPredicate(null));

        $anyPredicate = $this->getPredicateInstance(true, false);
        $this->assertTrue($anyPredicate(null));

        $anyPredicate = $this->getPredicateInstance(true, false, false);
        $this->assertTrue($anyPredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return AnyPredicate::class;
    }
}
