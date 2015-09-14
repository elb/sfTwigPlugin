<?php

/*
 * This file is part of the sfTwigPlugin package.
 *
 * (c) Henrik Bjornskov <henrik@bearwoods.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Partial helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Partial_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('include_component_slot', 'include_component_slot'),
      new Twig_SimpleFunction('get_component_slot', 'get_component_slot'),
      new Twig_SimpleFunction('has_component_slot', 'has_component_slot'),
      new Twig_SimpleFunction('include_component', 'include_component'),
      new Twig_SimpleFunction('get_component', 'get_component'),
      new Twig_SimpleFunction('include_partial', 'include_partial'),
      new Twig_SimpleFunction('get_partial', 'get_partial'),
      new Twig_SimpleFunction('slot', 'slot'),
      new Twig_SimpleFunction('end_slot', 'end_slot'),
      new Twig_SimpleFunction('has_slot', 'has_slot'),
      new Twig_SimpleFunction('include_slot', 'include_slot'),
      new Twig_SimpleFunction('get_slot', 'get_slot'),
    );
  }

  public function getName()
  {
    return 'partial';
  }
}
