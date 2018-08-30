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
 * Test Dutek\Predicate\FalsePredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class FalsePredicateTest extends AbstractPredicateTestCase
{
    public function testEvaluatesToFalse()
    {
        $falsePredicate = $this->getPredicateInstance();
        $this->assertFalse($falsePredicate($this->getTestValue()));
    }

    protected function getPredicateClassName() : string
    {
        return FalsePredicate::class;
    }
}
