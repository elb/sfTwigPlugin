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
 * Tag helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Tag_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('tag', 'tag'),
      new Twig_SimpleFunction('content_tag', 'content_tag'),
      new Twig_SimpleFunction('cdata_section', 'cdata_section'),
      new Twig_SimpleFunction('comment_as_conditional', 'comment_as_conditional'),
      new Twig_SimpleFunction('escape_javascript', 'escape_javascript'),
      new Twig_SimpleFunction('escape_once', 'escape_once'),
      new Twig_SimpleFunction('fix_double_escape', 'fix_double_escape'),
      new Twig_SimpleFunction('get_id_from_name', 'get_id_from_name'),
    );
  }

  public function getName()
  {
    return 'tag';
  }
}
