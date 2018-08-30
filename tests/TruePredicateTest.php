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
 * Test Dutek\Predicate\TruePredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class TruePredicateTest extends AbstractPredicateTestCase
{
    public function testEvaluatesToTrue()
    {
        $truePredicate = $this->getPredicateInstance();
        $this->assertTrue($truePredicate(null));
    }

    protected function getPredicateClassName() : string
    {
        return TruePredicate::class;
    }
}
