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
 * JavascriptBase helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class JavascriptBase_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('link_to_function', 'link_to_function'),
      new Twig_SimpleFunction('button_to_function', 'button_to_function'),
      new Twig_SimpleFunction('javascript_tag', 'javascript_tag'),
      new Twig_SimpleFunction('end_javascript_tag', 'end_javascript_tag'),
      new Twig_SimpleFunction('javascript_cdata_section', 'javascript_cdata_section'),
      new Twig_SimpleFunction('if_javascript', 'if_javascript'),
      new Twig_SimpleFunction('end_if_javascript', 'end_if_javascript'),
      new Twig_SimpleFunction('array_or_string_for_javascript', 'array_or_string_for_javascript'),
      new Twig_SimpleFunction('options_for_javascript', 'options_for_javascript'),
      new Twig_SimpleFunction('boolean_for_javascript', 'boolean_for_javascript'),
    );
  }

  public function getName()
  {
    return 'javascriptbase';
  }
}
