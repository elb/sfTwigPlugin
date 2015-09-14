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
 * DateForm helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class DateForm_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('select_day_tag', 'select_day_tag'),
      new Twig_SimpleFunction('select_month_tag', 'select_month_tag'),
      new Twig_SimpleFunction('select_year_tag', 'select_year_tag'),
      new Twig_SimpleFunction('select_date_tag', 'select_date_tag'),
      new Twig_SimpleFunction('select_second_tag', 'select_second_tag'),
      new Twig_SimpleFunction('select_minute_tag', 'select_minute_tag'),
      new Twig_SimpleFunction('select_hour_tag', 'select_hour_tag'),
      new Twig_SimpleFunction('select_ampm_tag', 'select_ampm_tag'),
      new Twig_SimpleFunction('select_time_tag', 'select_time_tag'),
      new Twig_SimpleFunction('select_datetime_tag', 'select_datetime_tag'),
      new Twig_SimpleFunction('select_number_tag', 'select_number_tag'),
      new Twig_SimpleFunction('select_timezone_tag', 'select_timezone_tag'),
    );
  }

  public function getName()
  {
    return 'dateform';
  }
}
