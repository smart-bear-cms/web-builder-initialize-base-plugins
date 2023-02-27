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
 */
class BaseCore extends InitializeBaseCore
{
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
     * @time     : 27/02/2023 30:41
     */
    public function responseToHtml()
    {
        return Template::nativeRender($this->response['templates'], $this->response);
    }
}
