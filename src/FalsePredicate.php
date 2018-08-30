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
 * Predicate implementation that always returns false.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class FalsePredicate implements Predicate
{
    /**
     * Evaluates the predicate returning false always.
     *
     * @param mixed $value The input value.
     * @return bool Always false.
     */
    public function __invoke($value) : bool
    {
        return false;
    }
}
