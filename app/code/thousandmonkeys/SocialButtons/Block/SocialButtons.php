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
		return $this->_scopeConfig->getValue('socialbuttons/facebook/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showFacebookShare()
	{
		return $this->_scopeConfig->getValue('socialbuttons/facebook/share', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function getFacebookAppId()
	{
		return $this->_scopeConfig->getValue('socialbuttons/facebook/appid', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function getFacebookCount()
	{
		return $this->_scopeConfig->getValue('socialbuttons/facebook/count', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showTwitter()
	{
		return $this->_scopeConfig->getValue('socialbuttons/twitter/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
	
	public function showPinterest()
	{
		return $this->_scopeConfig->getValue('socialbuttons/pinterest/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}

	public function showGPlus()
	{
		return $this->_scopeConfig->getValue('socialbuttons/google/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
		
	public function getGPlusCount()
	{
		return $this->_scopeConfig->getValue('socialbuttons/google/count', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
	}
}
