<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_Base
 * @copyright Copyright (c) 2023 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\Base\Model;

use Monolog\Handler\StreamHandler;

class Logger
{
    /**
     * Log to a specified file
     */
    public static function log(string $msg, string $file, int $priority = \Monolog\Logger::DEBUG): void
    {
        $logger = new \Monolog\Logger('debug');
        $logger->pushHandler(new StreamHandler(BP . '/var/log/' . $file, $priority));
        $logger->debug($msg);
    }
}
