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

use ArrayIterator;
use Iterator;
use Throwable;

/**
 * Test Dutek\Predicate\InstanceOfPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class InstanceOfPredicateTest extends AbstractPredicateTestCase
{
    public function testValueIsInstanceOfPredicateEvaluatesToTrue()
    {
        $instanceOfPredicate = $this->getPredicateInstance(Iterator::class);
        $this->assertTrue($instanceOfPredicate(new ArrayIterator([])));
    }

    public function testValueIsNotInstanceOfPredicateEvaluatesToFalse()
    {
        $instanceOfPredicate = $this->getPredicateInstance(Throwable::class);
        $this->assertFalse($instanceOfPredicate(new ArrayIterator([])));
    }

    protected function getPredicateClassName() : string
    {
        return InstanceOfPredicate::class;
    }
}
