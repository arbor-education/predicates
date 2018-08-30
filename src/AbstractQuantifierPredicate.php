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
 * Abstract base class for quantification predicates, e.g. All, Any, None.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
abstract class AbstractQuantifierPredicate implements PredicateDecorator
{
    protected $predicates;

    /**
     * @param Predicate ...$predicates The predicates to check
     */
    public function __construct(Predicate ...$predicates)
    {
        $this->predicates = $predicates;
    }

    /**
     * Gets the predicates.
     *
     * @return Predicate[] The predicates being decorated.
     */
    public function getPredicates() : array
    {
        return $this->predicates;
    }
}
