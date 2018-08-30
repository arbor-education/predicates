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
 * Predicate implementation that returns true if both predicates return true.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class AndPredicate implements PredicateDecorator
{
    protected $predicate1;
    protected $predicate2;

    /**
     * AndPredicate constructor.
     *
     * @param Predicate $predicate1 The first predicate to check.
     * @param Predicate $predicate2 The second predicate to check.
     */
    public function __construct(Predicate $predicate1, Predicate $predicate2)
    {
        $this->predicate1 = $predicate1;
        $this->predicate2 = $predicate2;
    }

    /**
     * Gets the two predicates being decorated as an array.
     *
     * @return array The predicates.
     */
    public function getPredicates() : array
    {
        return [$this->predicate1, $this->predicate2];
    }

    /**
     * Evaluates the predicate returning true if both predicates return true.
     *
     * @param mixed $value The input value.
     * @return bool true if both decorated predicates return true
     */
    public function __invoke($value) : bool
    {
        return ($this->predicate1)($value) && ($this->predicate2)($value);
    }
}
