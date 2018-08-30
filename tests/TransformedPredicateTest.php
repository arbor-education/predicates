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

use Dutek\Transformer\Transformer;

/**
 * Test Dutek\Predicate\TransformedPredicate class.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class TransformedPredicateTest extends AbstractPredicateTestCase
{
    public function testGetTransformer()
    {
        $transformer = $this->createMock(Transformer::class);
        $decoratedPredicate = $this->createPredicateMock(false);

        $predicate = new TransformedPredicate($transformer, $decoratedPredicate);
        $this->assertEquals($transformer, $predicate->getTransformer());
    }

    public function testGetPredicates()
    {
        $transformer = $this->createMock(Transformer::class);
        $decoratedPredicate = $this->createPredicateMock(false);

        $predicate = new TransformedPredicate($transformer, $decoratedPredicate);
        $this->assertEquals([$decoratedPredicate], $predicate->getPredicates());
    }

    public function testTransformAndEvaluate()
    {
        $originalValue = 'original-test-value';
        $transformedValue = 'transformed-test-value';

        $transformer = $this->createMock(Transformer::class);
        $transformer->method('__invoke')
            ->with($originalValue)
            ->willReturn($transformedValue);

        $predicate = $this->createMock(Predicate::class);
        $predicate->method('__invoke')
            ->with($transformedValue)
            ->willReturn(true);

        $transformedPredicate = $this->getPredicateInstance($transformer, $predicate);
        $this->assertTrue($transformedPredicate($originalValue));
    }

    protected function getPredicateClassName() : string
    {
        return TransformedPredicate::class;
    }
}
