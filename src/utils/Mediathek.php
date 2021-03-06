<?php

/**
 * Base class for all Mediatheken.
 *
 * @author Daniel Gehn <me@theinad.com>
 * @version 0.0.1
 * @copyright 2017 Daniel Gehn
 * @license http://opensource.org/licenses/MIT Licensed under MIT License
 */
abstract class Mediathek
{
  protected $logger;
  protected $tools;

  public function __construct(Logger $logger, Tools $tools)
  {
    $this->logger = $logger;
    $this->tools = $tools;
  }

}
