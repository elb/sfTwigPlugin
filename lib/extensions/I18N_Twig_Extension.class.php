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
 * I18N helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class I18N_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('__', '__'),
      new Twig_SimpleFunction('t', '__'),
      new Twig_SimpleFunction('format_number_choice', 'format_number_choice'),
      new Twig_SimpleFunction('format_country', 'format_country'),
      new Twig_SimpleFunction('format_language', 'format_language'),
    );
  }

  public function getName()
  {
    return 'i18n';
  }
}
