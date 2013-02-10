<?php
/*
 * Responsible for looking up and formatting date parts
 */

namespace Stamp\Emitters;

class Lookup
{
  private $format;
  public $field;

  function __construct($format)
  {
    $this->format = $format;
    switch( $format ) {
      case 'F':
      case 'M':
        $this->field = 'month';
        break;
      case 'l':
      case 'D':
      case 'j':
        $this->field = 'day';
        break;
      case 'Y':
        $this->field = 'year';
        break;
      case 'T':
        $this->field = 'tz';
        break;
    }
  }

  function format($time)
  {
    return date($this->format, $time);
  }
}