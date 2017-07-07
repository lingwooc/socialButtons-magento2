<?php

namespace thousandmonkeys\SocialButtons\Block;

class SocialButtons extends \Magento\Framework\View\Element\Template {

	protected $_template = 'buttons.phtml';

	protected $_scopeConfig;
	protected $_embedded;
	protected $_registry;
	private $product;
	/**
	 * [__construct description]
	 * @param \Magento\Framework\View\Element\Template\Context                $context                 [description]
	 * @param array                                                           $data                    [description]
	 */
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		Magento\Framework\Registry $registry ,
		array $data = []
	) {
		parent::__construct($context, $data);
		$this->_scopeConfig = $context->getScopeConfig();
		$this->_registry = $registry;
	}

    /**
     * @return Product
     */
    private function getProduct()
    {
        if (is_null($this->product)) {
            $this->product = $this->registry->registry('product');

            if (!$this->product->getId()) {
                throw new LocalizedException(__('Failed to initialize product'));
            }
        }

        return $this->product;
    }

	public function getProductName()
    {
        return $this->getProduct()->getName();
    }

	public function isEmbedded()
	{
		if(!$_embedded)
			$this->_embedded$this->_scopeConfig->getValue('socialbuttons/embedded/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
		return $_embedded;
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
