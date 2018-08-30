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

use PHPUnit\Framework\TestCase;

/**
 * Base class for tests of Dutek\Predicate\Predicate implementations.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
abstract class AbstractPredicateTestCase extends TestCase
{
    protected function getPredicateInstance(...$args) : Predicate
    {
        $predicateClassName = $this->getPredicateClassName();
        return new $predicateClassName(...$args);
    }

    abstract protected function getPredicateClassName() : string;

    protected function createPredicateMock(bool $willReturn) : Predicate
    {
        $predicateMock = $this->createMock(Predicate::class);
        $predicateMock->method('__invoke')
            ->willReturn($willReturn);
        return $predicateMock;
    }

    protected function getTestValue()
    {
        return 'test-value';
    }
}
