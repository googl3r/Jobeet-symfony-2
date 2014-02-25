<?php
/**
 * Created by PhpStorm.
 * User: haxormamad
 * Date: 20/02/14
 * Time: 12:44
 */

namespace Ens\JoobetBundle\Utils;


class Joobet {
static public function slugify($text)
{
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);
// trim and lowercase
    $text = strtolower(trim($text, '-'));
    return $text;
}
} 