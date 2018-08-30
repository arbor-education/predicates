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
 * Test Dutek\Predicate\NonePredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class NonePredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testEmptyPredicatesCollectionEvaluatesToTrue()
    {
        $nonePredicate = $this->getPredicateInstance();
        $this->assertTrue($nonePredicate(null));
    }

    public function testSingleTruePredicateEvaluatesToFalse()
    {
        $nonePredicate = $this->getPredicateInstance(true);
        $this->assertFalse($nonePredicate(null));
    }

    public function testSingleFalsePredicateEvaluatesToTrue()
    {
        $nonePredicate = $this->getPredicateInstance(false);
        $this->assertTrue($nonePredicate(null));
    }

    public function testMultipleTruePredicatesEvaluatesToFalse()
    {
        $nonePredicate = $this->getPredicateInstance(true, true);
        $this->assertFalse($nonePredicate(null));

        $nonePredicate = $this->getPredicateInstance(true, true, true);
        $this->assertFalse($nonePredicate(null));
    }

    public function testMultipleFalsePredicatesEvaluatesToTrue()
    {
        $nonePredicate = $this->getPredicateInstance(false, false);
        $this->assertTrue($nonePredicate(null));

        $nonePredicate = $this->getPredicateInstance(false, false, false);
        $this->assertTrue($nonePredicate(null));
    }

    public function testMultipleTrueAndFalsePredicatesEvaluatesToFalse()
    {
        $nonePredicate = $this->getPredicateInstance(false, true);
        $this->assertFalse($nonePredicate(null));

        $nonePredicate = $this->getPredicateInstance(false, true, true);
        $this->assertFalse($nonePredicate(null));

        $nonePredicate = $this->getPredicateInstance(true, false);
        $this->assertFalse($nonePredicate(null));

        $nonePredicate = $this->getPredicateInstance(true, false, false);
        $this->assertFalse($nonePredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return NonePredicate::class;
    }
}
