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
 * Text helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Text_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('truncate_text', 'truncate_text'),
      new Twig_SimpleFunction('highlight_text', 'highlight_text'),
      new Twig_SimpleFunction('excerpt_text', 'excerpt_text'),
      new Twig_SimpleFunction('wrap_text', 'wrap_text'),
      new Twig_SimpleFunction('simple_format_text', 'simple_format_text'),
      new Twig_SimpleFunction('auto_link_text', 'auto_link_text'),
      new Twig_SimpleFunction('strip_links_text', 'strip_links_text'),
    );
  }

  public function getName()
  {
    return 'text';
  }
}
