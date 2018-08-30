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
 * Test Dutek\Predicate\OrPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class OrPredicateTest extends AbstractQuantifierPredicateTestCase
{
    public function testTrueAndFalsePredicatesEvaluatesToTrue()
    {
        $orPredicate = $this->getPredicateInstance(true, false);
        $this->assertTrue($orPredicate(null));
    }

    public function testFalseAndTruePredicatesEvaluatesToTrue()
    {
        $orPredicate = $this->getPredicateInstance(false, true);
        $this->assertTrue($orPredicate(null));
    }

    public function testBothFalsePredicatesEvaluatesToFalse()
    {
        $orPredicate = $this->getPredicateInstance(false, false);
        $this->assertFalse($orPredicate(null));
    }

    public function testBothTruePredicatesEvaluatesToTrue()
    {
        $orPredicate = $this->getPredicateInstance(true, true);
        $this->assertTrue($orPredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return OrPredicate::class;
    }
}
