<?php
/**
 * Human Element Inc.
 *
 * @package HE_Base
 * @copyright Copyright (c) 2017 Human Element Inc. (http://www.human-element.com)
 */

namespace HE\Base\Model;

class Logger
{
    /**
     * Log to a specified file
     *
     * @param $msg
     * @param $file
     * @param int $priority
     */
    public static function log($msg, $file, $priority = \Zend\Log\Logger::DEBUG)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/' . $file);
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->log($priority, $msg);
    }
}