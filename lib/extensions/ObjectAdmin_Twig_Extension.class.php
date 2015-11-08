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
 * ObjectAdmin helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class ObjectAdmin_Twig_Extension extends Twig_Extension
{
  public function getFunctions()
  {
    return array(
      new Twig_SimpleFunction('object_admin_input_file_tag', 'object_admin_input_file_tag'),
      new Twig_SimpleFunction('object_admin_double_list', 'object_admin_double_list'),
      new Twig_SimpleFunction('object_admin_select_list', 'object_admin_select_list'),
      new Twig_SimpleFunction('object_admin_check_list', 'object_admin_check_list'),
    );
  }

  public function getName()
  {
    return 'objectadmin';
  }
}
