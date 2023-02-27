<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Plugins;


use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Base\BaseCore;
use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Database\Database;

/**
 * Class BasePlugins
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Plugins
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BasePlugins extends BaseCore
{
    /**
     * BasePlugins constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
        $this->db = new Database($options);
    }
}
