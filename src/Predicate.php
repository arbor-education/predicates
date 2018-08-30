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
 * Defines a interface implemented by classes that perform a predicate test on an value.
 *
 * A Predicate is the object equivalent of an if statement.
 * It uses the input value to return a true or false value, and is often used in validation or filtering.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
interface Predicate
{
    /**
     * Use the specified parameter to perform a test that returns true or false.
     *
     * @param mixed $value The value to evaluate.
     * @return bool
     */
    public function __invoke($value) : bool;
}
