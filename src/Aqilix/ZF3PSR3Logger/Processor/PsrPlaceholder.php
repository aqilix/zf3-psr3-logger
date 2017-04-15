<?php
namespace Aqilix\ZF3PSR3Logger\Processor;

/**
 * Overwrite Zend\Log\Processor\PsrPlaceholder
 *
 * @author Dolly Aswin <dolly.aswin@gmail.com>
 */
class PsrPlaceholder extends \Zend\Log\Processor\PsrPlaceholder
{
    public function process(array $event)
    {
        $event = parent::process($event);
        $event["extra"] = null;
        return $event;
    }
}
