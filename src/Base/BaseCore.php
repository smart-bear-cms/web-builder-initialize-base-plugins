<?php

namespace nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Base;

use nguyenanhung\Platforms\WebBuilderSDK\InitializeCoreServices\Base\BaseCore as InitializeBaseCore;
use nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Template\Template;

/**
 * Class BaseCore
 *
 * @package   nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Base
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property \nguyenanhung\Platforms\WebBuilderSDK\Initialize\BasePlugins\Database\Database $db
 */
class BaseCore extends InitializeBaseCore
{
    const VERSION = '1.0.0';
    const KEY_DATABASE = 'DATABASE';
    const KEY_OPTIONS = 'OPTIONS';
    const KEY_AUTH = 'AUTH';
    const KEY_CONFIG = 'CONFIG';
    const KEY_API_SERVICE = 'API_SERVICE';
    const KEY_HANDLE = 'HANDLE';

    /**
     * BaseCore constructor.
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
    }

    /**
     * Function responseToHtml
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 02/07/2022 09:02
     */
    public function responseToHtml()
    {
        return Template::nativeRender($this->response['templates'], $this->response);
    }
}
