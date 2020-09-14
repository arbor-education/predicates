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
 * Predicate implementation that returns true if the input is empty.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class EmptyPredicate implements Predicate
{
    /**
     * Evaluates the predicate returning true if the input is empty.
     *
     * @param mixed $value The input value.
     * @return bool true if input is empty.
     */
    public function __invoke($value) : bool
    {
        return empty($value);
    }
}
