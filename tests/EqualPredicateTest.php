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
 * Test Dutek\Predicate\EqualPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class EqualPredicateTest extends AbstractPredicateTestCase
{
    public function testGetValue()
    {
        $value = 'test-value';

        $predicate = new EqualPredicate($value);
        $this->assertEquals($value, $predicate->getValue());
    }

    /**
     * @dataProvider equalValuesEvaluatesToTrueDataProvider
     * @param mixed $testValue
     */
    public function testEqualValuesEvaluatesToTrue($testValue)
    {
        $equalPredicate = $this->getPredicateInstance($testValue);
        $this->assertTrue($equalPredicate($testValue));
    }

    /**
     * @dataProvider notEqualValuesEvaluatesToFalseDataProvider
     * @param $testValue
     * @param null $predicateValue
     */
    public function testNotEqualValuesEvaluatesToFalse($testValue, $predicateValue = null)
    {
        $equalPredicate = $this->getPredicateInstance($predicateValue);
        $this->assertFalse($equalPredicate($testValue));
    }

    public function equalValuesEvaluatesToTrueDataProvider() : array
    {
        return [
            [null],
            [''],
            [[]],
            [[1, 2, 3]],
            [['a' => 1, 'b' => 1]],
            [new \ArrayIterator([1, 2, 3])],
        ];
    }

    public function notEqualValuesEvaluatesToFalseDataProvider()
    {
        return [
            [null, ''],
            [''],
            [[]],
            [[1, 2, 3]],
            [['a' => 1, 'b' => 1]],
            [new \ArrayIterator([1, 2, 3])],
            [new \ArrayIterator([1, 2, 3]), new \ArrayIterator([1, 2, 3])],
        ];
    }

    protected function getPredicateClassName() : string
    {
        return EqualPredicate::class;
    }
}
