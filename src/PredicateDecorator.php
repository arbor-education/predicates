<?php
/**
 * Created by PhpStorm.
 * User: dusanvejin
 * Date: 8/29/18
 * Time: 11:33 PM
 */

namespace Dutek\Predicate;

/**
 * Defines a predicate that decorates one or more other predicates.
 * This interface enables tools to access the decorated predicates.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
interface PredicateDecorator extends Predicate
{
    /**
     * Gets the predicates being decorated as an array.
     *
     * @return Predicate[] The predicates being decorated.
     */
    public function getPredicates() : array;
}
