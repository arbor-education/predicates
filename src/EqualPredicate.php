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
final class EqualPredicate implements Predicate
{
    protected $value;

    /**
     * EqualPredicate constructor.
     *
     * @param mixed $value The value to compare to.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Gets the value.
     *
     * @return mixed The value.
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Evaluates the predicate returning true if the input equals the stored value.
     *
     * @param mixed $value The input value
     * @return bool true if input value equals stored value.
     */
    public function __invoke($value) : bool
    {
        return $this->value === $value;
    }
}
