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
 * Predicate implementation that always returns true.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class TruePredicate implements Predicate
{
    /**
     * Evaluates the predicate returning true always.
     *
     * @param mixed $value The input value.
     * @return bool Always true.
     */
    public function __invoke($value) : bool
    {
        return true;
    }
}
