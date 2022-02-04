<?php
/**
 * @author Shaun Hogan
 * @package Learning/CronLogger
 */
namespace Learning\CronLogger\Cron;

use Psr\Log\LoggerInterface;


/**
 * @class CronLoggerModel
 */
class CronLoggerModel
{


    /**
     * @var LoggerInterface
     */
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    /**
     * Write to log
     *
     * @return void
     */
    public function execute() {
        $date = date('Y-m-d');
        $this->logger->info("

            ===================================================================================================
             _______    ______   .___________. _______   __    _______  __  .___________.     ___       __
            |       \  /  __  \  |           ||       \ |  |  /  _____||  | |           |    /   \     |  |
            |  .--.  ||  |  |  | `---|  |----`|  .--.  ||  | |  |  __  |  | `---|  |----`   /  ^  \    |  |
            |  |  |  ||  |  |  |     |  |     |  |  |  ||  | |  | |_ | |  |     |  |       /  /_\  \   |  |
            |  '--'  ||  `--'  |     |  |     |  '--'  ||  | |  |__| | |  |     |  |      /  _____  \  |  `----.
            |_______/  \______/      |__|     |_______/ |__|  \______| |__|     |__|     /__/     \__\ |_______|

            =========================================== WFT {$date} ===========================================

        ");

    }
}
