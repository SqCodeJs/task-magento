<?php

namespace Task\WebInfo\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class WebInfo extends Template
{
    protected $_urlInterface;
    protected $scopeConfig;

    public function __construct(
        Context $context,
        \Magento\Framework\UrlInterface $urlInterface,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_urlInterface = $urlInterface;
        $this->scopeConfig = $scopeConfig;
    }

    public function getPhoneNumber()
    {
        return $this->scopeConfig->getValue('general/store_information/phone',ScopeInterface::SCOPE_STORE);
    }

    public function getEmailUs()
    {
        return $this->scopeConfig->getValue('trans_email/ident_general/email',ScopeInterface::SCOPE_STORE);
    }
}
