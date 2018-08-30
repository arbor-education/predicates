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
 * Predicate implementation that returns true if only one of the predicates return true.
 * If the array of predicates is empty, then this predicate returns false.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
class OnePredicate extends AbstractQuantifierPredicate
{
    /**
     * Evaluates the predicate returning true if only one decorated predicate returns true.
     *
     * @param mixed $value The input value.
     * @return bool true if only one decorated predicate returns true
     */
    public function __invoke($value) : bool
    {
        $match = false;

        foreach ($this->predicates as $predicate) {
            if ($predicate($value)) {
                if ($match) {
                    return false;
                }

                $match = true;
            }
        }

        return $match;
    }
}
