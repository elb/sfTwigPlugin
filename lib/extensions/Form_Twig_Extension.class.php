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
 * Form helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Form_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('options_for_select', 'options_for_select'),
      new Twig_SimpleFunction('form_tag', 'form_tag'),
      new Twig_SimpleFunction('select_tag', 'select_tag'),
      new Twig_SimpleFunction('select_country_tag', 'select_country_tag'),
      new Twig_SimpleFunction('select_language_tag', 'select_language_tag'),
      new Twig_SimpleFunction('select_currency_tag', 'select_currency_tag'),
      new Twig_SimpleFunction('input_tag', 'input_tag'),
      new Twig_SimpleFunction('input_hidden_tag', 'input_hidden_tag'),
      new Twig_SimpleFunction('input_file_tag', 'input_file_tag'),
      new Twig_SimpleFunction('input_password_tag', 'input_password_tag'),
      new Twig_SimpleFunction('textarea_tag', 'textarea_tag'),
      new Twig_SimpleFunction('checkbox_tag', 'checkbox_tag'),
      new Twig_SimpleFunction('radiobutton_tag', 'radiobutton_tag'),
      new Twig_SimpleFunction('input_date_range_tag', 'input_date_range_tag'),
      new Twig_SimpleFunction('input_date_tag', 'input_date_tag'),
      new Twig_SimpleFunction('submit_tag', 'submit_tag'),
      new Twig_SimpleFunction('reset_tag', 'reset_tag'),
      new Twig_SimpleFunction('submit_image_tag', 'submit_image_tag'),
      new Twig_SimpleFunction('label_for', 'label_for'),
    );
  }

  public function getName()
  {
    return 'form';
  }
}
