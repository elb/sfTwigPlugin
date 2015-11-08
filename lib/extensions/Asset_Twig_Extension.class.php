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
 * Asset helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Asset_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('auto_discovery_link_tag', 'auto_discovery_link_tag'),
      new Twig_SimpleFunction('javascript_path', 'javascript_path'),
      new Twig_SimpleFunction('javascript_include_tag', 'javascript_include_tag'),
      new Twig_SimpleFunction('stylesheet_path', 'stylesheet_path'),
      new Twig_SimpleFunction('stylesheet_tag', 'stylesheet_tag'),
      new Twig_SimpleFunction('use_stylesheet', 'use_stylesheet'),
      new Twig_SimpleFunction('use_javascript', 'use_javascript'),
      new Twig_SimpleFunction('decorate_with', 'decorate_with'),
      new Twig_SimpleFunction('image_path', 'image_path'),
      new Twig_SimpleFunction('image_tag', 'image_tag'),
      new Twig_SimpleFunction('include_metas', 'include_metas'),
      new Twig_SimpleFunction('include_http_metas', 'include_http_metas'),
      new Twig_SimpleFunction('include_title', 'include_title'),
      new Twig_SimpleFunction('get_javascripts', 'get_javascripts'),
      new Twig_SimpleFunction('include_javascripts', 'include_javascripts'),
      new Twig_SimpleFunction('get_stylesheets', 'get_stylesheets'),
      new Twig_SimpleFunction('include_stylesheets', 'include_stylesheets'),
      new Twig_SimpleFunction('dynamic_javascript_include_tag', 'dynamic_javascript_include_tag'),
      new Twig_SimpleFunction('use_dynamic_javascript', 'use_dynamic_javascript'),
      new Twig_SimpleFunction('use_dynamic_stylesheet', 'use_dynamic_stylesheet'),
      new Twig_SimpleFunction('getjavascripts', 'getjavascripts'),
      new Twig_SimpleFunction('get_javascripts_for_form', 'get_javascripts_for_form'),
      new Twig_SimpleFunction('include_javascripts_for_form', 'include_javascripts_for_form'),
      new Twig_SimpleFunction('use_javascripts_for_form', 'use_javascripts_for_form'),
      new Twig_SimpleFunction('getstylesheets', 'getstylesheets'),
      new Twig_SimpleFunction('get_stylesheets_for_form', 'get_stylesheets_for_form'),
      new Twig_SimpleFunction('include_stylesheets_for_form', 'include_stylesheets_for_form'),
      new Twig_SimpleFunction('use_stylesheets_for_form', 'use_stylesheets_for_form'),
    );
  }

  public function getName()
  {
    return 'asset';
  }
}
