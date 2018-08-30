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
 * Predicate implementation that returns true if none of the predicates return true.
 * If the array of predicates is empty, then this predicate returns true.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
class NonePredicate extends AbstractQuantifierPredicate
{
    /**
     * Evaluates the predicate returning false if any stored predicate returns false.
     *
     * @param mixed $value The input value.
     * @return bool true if none of decorated predicates return true.
     */
    public function __invoke($value) : bool
    {
        foreach ($this->predicates as $predicate) {
            if ($predicate($value)) {
                return false;
            }
        }

        return true;
    }
}
