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
 * Test Dutek\Predicate\NotPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class NotPredicateTest extends AbstractPredicateTestCase
{
    public function testFalseDecoratedPredicateEvaluatesToTrue()
    {
        $decoratedPredicate = $this->createPredicateMock(false);
        $notPredicate = $this->getPredicateInstance($decoratedPredicate);
        $this->assertTrue($notPredicate(null));
    }

    public function testTrueDecoratedPredicateEvaluatesToFalse()
    {
        $decoratedPredicate = $this->createPredicateMock(true);
        $notPredicate = $this->getPredicateInstance($decoratedPredicate);
        $this->assertFalse($notPredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return NotPredicate::class;
    }
}
