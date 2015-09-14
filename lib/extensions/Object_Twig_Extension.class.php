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
 * Object helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Object_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('object_input_date_tag', 'object_input_date_tag'),
      new Twig_SimpleFunction('object_textarea_tag', 'object_textarea_tag'),
      new Twig_SimpleFunction('objects_for_select', 'objects_for_select'),
      new Twig_SimpleFunction('object_select_tag', 'object_select_tag'),
      new Twig_SimpleFunction('object_select_country_tag', 'object_select_country_tag'),
      new Twig_SimpleFunction('object_select_language_tag', 'object_select_language_tag'),
      new Twig_SimpleFunction('object_input_hidden_tag', 'object_input_hidden_tag'),
      new Twig_SimpleFunction('object_input_tag', 'object_input_tag'),
      new Twig_SimpleFunction('object_checkbox_tag', 'object_checkbox_tag'),
    );
  }

  public function getName()
  {
    return 'object';
  }
}
