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
 * Predicate implementation that returns true if any of the predicates return true.
 * If the array of predicates is empty, then this predicate returns false.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
class AnyPredicate extends AbstractQuantifierPredicate
{
    /**
     * Evaluates the predicate returning true if any predicate returns true.
     *
     * @param mixed $value The input value.
     * @return bool true if any decorated predicate return true
     */
    public function __invoke($value) : bool
    {
        foreach ($this->predicates as $predicate) {
            if ($predicate($value)) {
                return true;
            }
        }

        return false;
    }
}
