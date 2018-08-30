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

use Dutek\Transformer\Transformer;

/**
 * Predicate implementation that transforms the given value before invoking another Predicate.
 *
 * @package Dutek\Predicate
 * @author Dušan Vejin <dutekvejin@gmail.com>
 */
final class TransformedPredicate implements PredicateDecorator
{
    protected $transformer;
    protected $predicate;

    /**
     * TransformerPredicate constructor.
     *
     * @param Transformer $transformer The transformer to call.
     * @param Predicate $predicate The predicate to call with the result of the transform.
     */
    public function __construct(Transformer $transformer, Predicate $predicate)
    {
        $this->transformer = $transformer;
        $this->predicate = $predicate;
    }

    /**
     * Gets the transformer in use.
     *
     * @return Transformer The transformer.
     */
    public function getTransformer() : Transformer
    {
        return $this->transformer;
    }

    /**
     * Gets the predicate being decorated.
     *
     * @return array The predicate as the only element in an array.
     */
    public function getPredicates() : array
    {
        return [$this->predicate];
    }

    /**
     * Evaluates the predicate returning the result of the decorated predicate once the input has been transformed
     *
     * @param mixed $value The input value which will be transformed.
     * @return bool true if decorated predicate returns true.
     */
    public function __invoke($value) : bool
    {
        return ($this->predicate)(($this->transformer)($value));
    }
}
