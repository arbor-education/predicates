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
    /**
     * @param mixed ...$args
     * @return AbstractQuantifierPredicate
     */
    protected function getPredicateInstance(...$args) : Predicate
    {
        return parent::getPredicateInstance(
            ...array_map(function ($arg) {
                return $this->createPredicateMock((bool) $arg);
            }, $args)
        );
    }
}
