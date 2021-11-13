<?php
declare(strict_types=1);

namespace SoftLoft\SmsIntegration\Block\Adminhtml\SmsTemplates\Edit;

use Magento\Backend\Block\Widget\Context;

abstract class GenericButton
{
    protected Context $context;

    /**
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    /**
     * Return model ID
     *
     * @return int|null
     */
    public function getModelId(): ?int
    {
        return (int) $this->context->getRequest()->getParam('smstemplates_id');
    }

    /**
     * Generate url by route and parameters
     *
     * @param string $route
     * @param array $params
     * @return  string
     */
    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}

