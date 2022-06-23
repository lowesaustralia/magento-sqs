<?php
/**
 * @package BelVG AWS Sqs.
 * @copyright 2018
 *
 */

namespace Belvg\Sqs\Helper;

use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public const CONFIG_PATH_AWS_QUEUE_PREFIX = 'lowescore/sqs/prefix';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Prepare queue name
     *
     * @param string $queueName
     * @return mixed
     */
    public static function prepareQueueName(string $queueName)
    {
        return str_replace('.', '_', $queueName);
    }

    /**
     * @return string
     */
    public function getPrefix()
    {
       return $this->scopeConfig->getValue(self::CONFIG_PATH_AWS_QUEUE_PREFIX, 'store');
    }
}
