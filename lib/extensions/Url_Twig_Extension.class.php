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
 * Url helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Url_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('link_to2', 'link_to2'),
      new Twig_SimpleFunction('link_to1', 'link_to1'),
      new Twig_SimpleFunction('url_for2', 'url_for2'),
      new Twig_SimpleFunction('url_for1', 'url_for1'),
      new Twig_SimpleFunction('url_for', 'url_for'),
      new Twig_SimpleFunction('link_to', 'link_to'),
      new Twig_SimpleFunction('url_for_form', 'url_for_form'),
      new Twig_SimpleFunction('form_tag_for', 'form_tag_for'),
      new Twig_SimpleFunction('link_to_if', 'link_to_if'),
      new Twig_SimpleFunction('link_to_unless', 'link_to_unless'),
      new Twig_SimpleFunction('public_path', 'public_path'),
      new Twig_SimpleFunction('button_to', 'button_to'),
      new Twig_SimpleFunction('form_tag', 'form_tag'),
      new Twig_SimpleFunction('mail_to', 'mail_to'),
    );
  }

  public function getName()
  {
    return 'url';
  }
}
