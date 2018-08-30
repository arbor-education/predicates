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
 * Base class for tests of Dutek\Predicate\AbstractQuantifierPredicate implementations.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
abstract class AbstractQuantifierPredicateTestCase extends AbstractPredicateTestCase
{
    public function testGetPredicates()
    {
        $args = [$this->createPredicateMock(true), $this->createPredicateMock(true)];

        $predicate = $this->getPredicateInstance(...$args);
        $this->assertEquals($args, $predicate->getPredicates());
    }

    /**
     * @param mixed ...$args
     * @return AbstractQuantifierPredicate
     */
    protected function getPredicateInstance(...$args) : Predicate
    {
        return parent::getPredicateInstance(
            ...array_map(function ($arg) {
                if (!$arg instanceof Predicate) {
                    $arg = $this->createPredicateMock((bool) $arg);
                }

                return $arg;
            }, $args)
        );
    }
}
