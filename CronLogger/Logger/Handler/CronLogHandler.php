<?php
/**
 * @author Shaun Hogan
 * @package Learning/CronLogger
 */
namespace Learning\CronLogger\Logger\Handler;

use Magento\Framework\Logger\Handler\Base as BaseHandler;
use Monolog\Logger as MonologLogger;

/**
 * @class CronLogHandler
 */
class CronLogHandler extends BaseHandler
{
    /**
     * Logging level
     *
     * @var int
     */
    protected $loggerType = MonologLogger::INFO;

    /**
     * File name
     *
     * @var string
     */
    protected $fileName = '/var/log/cron_message.log';


}
