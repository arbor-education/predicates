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
 * Test Dutek\Predicate\NotNullPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class NotNullPredicateTest extends AbstractPredicateTestCase
{
    public function testNullValueEvaluatesToFalse()
    {
        $nullPredicate = $this->getPredicateInstance();
        $this->assertFalse($nullPredicate(null));
    }

    public function testNotNullValueEvaluatesToTrue()
    {
        $nullPredicate = $this->getPredicateInstance();
        $this->assertTrue($nullPredicate(''));
    }

    protected function getPredicateClassName() : string
    {
        return NotNullPredicate::class;
    }
}
