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
 * Predicate implementation that returns the opposite of the decorated predicate.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class NotPredicate implements PredicateDecorator
{
    protected $predicate;

    /**
     * NotPredicate constructor.
     * @param Predicate $predicate
     */
    public function __construct(Predicate $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * Gets the predicate being decorated.
     *
     * @return Predicate[] The predicate as the only element in an array.
     */
    public function getPredicates() : array
    {
        return [$this->predicate];
    }

    /**
     * Evaluates the predicate returning the opposite to the stored predicate.
     *
     * @param mixed $value The input value.
     * @return bool true if predicate returns false.
     */
    public function __invoke($value) : bool
    {
        return !($this->predicate)($value);
    }
}
