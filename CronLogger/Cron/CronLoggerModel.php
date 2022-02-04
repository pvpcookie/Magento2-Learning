<?php
/**
 * @author Shaun Hogan
 * @package Learning/CronLogger
 */
namespace Learning\CronLogger\Cron;
use \Psr\Log\LoggerInterface;

/**
 * @class CronLoggerModel
 */
class CronLoggerModel
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to system.log
     *
     * @return void
     */
    public function execute() {

        $this->logger->info( "IM HERE +++++++++++++++++++++++++++++++++++++++++++ ");

    }
}
