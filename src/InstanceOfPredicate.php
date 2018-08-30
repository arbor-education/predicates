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
 * Predicate implementation that returns true if the input is an instanceof the type stored in this predicate.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class InstanceOfPredicate implements Predicate
{
    protected $type;

    /**
     * InstanceOdPredicate constructor.
     *
     * @param string $type The type to check for.
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * Gets the type to compare to.
     *
     * @return string The type.
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * Evaluates the predicate returning true if the input value is of the correct type.
     *
     * @param mixed $value The input value
     * @return bool true if input is of stored type.
     */
    public function __invoke($value) : bool
    {
        return $value instanceof $this->type;
    }
}
