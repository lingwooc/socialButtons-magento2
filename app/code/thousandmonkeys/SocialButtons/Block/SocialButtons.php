<?php

namespace thousandmonkeys\SocialButtons\Block;

class SocialButtons extends \Magento\Framework\View\Element\Template {

	protected $_template = 'buttons.phtml';

	protected $_scopeConfig;

	/**
	 * [__construct description]
	 * @param \Magento\Framework\View\Element\Template\Context                $context                 [description]
	 * @param array                                                           $data                    [description]
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		array $data = []
	) {
		parent::__construct($context, $data);
		$this->_scopeConfig = $context->getScopeConfig();
	}
	
	public function showFacebook()
	{
		return $this->_scopeConfig->getValue('socialbuttons/general/enable_facebook', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showTwitter()
	{
		return $this->_scopeConfig->getValue('socialbuttons/general/enable_twitter', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showPinterest()
	{
		return $this->_scopeConfig->getValue('socialbuttons/general/enable_pinterest', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showGPlus()
	{
		return $this->_scopeConfig->getValue('socialbuttons/general/enable_google', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}
