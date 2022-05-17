<?php
/**
 * Copyright © Bymaze, All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bymaze\CheckoutALC\Plugin\Checkout;

use Bymaze\CheckoutALC\Helper\Data as Helper; 

Class LayoutProcessor{

    /**
     * @var Helper
     */
    protected $helperData;

    public function __construct(
        Helper $helperData
    ) {
        $this->_helper = $helperData;
    }

    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {

        $jsLayout = $this->getLabelLayout($jsLayout);
        $jsLayout = $this->getPlaceholderLayout($jsLayout);
        $jsLayout = $this->getOrderLayout($jsLayout);
        return $jsLayout; 
    }

    public function getLabelLayout($jsLayout){

        // Change shipping field labels for every payment method
        
        $LabelArray = $this->_helper->getLabel();
        $shippingForms = &$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'];

        $shippingForms['firstname']['label'] = __($LabelArray['shipping_label']['firstname']);
        $shippingForms['lastname']['label'] = __($LabelArray['shipping_label']['lastname']);
        $shippingForms['company']['label'] = __($LabelArray['shipping_label']['company']);
        $shippingForms['street']['label'] = __($LabelArray['shipping_label']['street']);
        $shippingForms['city']['label'] = __($LabelArray['shipping_label']['city']);
        $shippingForms['region_id']['label'] = __($LabelArray['shipping_label']['state']);
        $shippingForms['postcode']['label'] = __($LabelArray['shipping_label']['zip']);
        $shippingForms['country_id']['label'] = __($LabelArray['shipping_label']['country']);
        $shippingForms['telephone']['label'] = __($LabelArray['shipping_label']['number']);

        // Change billing field labels for every payment method

        $paymentForms = $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'];

        foreach ($paymentForms as $paymentMethodForm => $paymentMethodValue) {

            $paymentMethodCode = str_replace('-form', '', $paymentMethodForm);

            $billingAddress = &$jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form']['children']['form-fields']['children'];

            if (!isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                ['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form'])) {
                continue;
            }
            $billingAddress['firstname']['label'] = __($LabelArray['billing_label']['firstname']);
            $billingAddress['lastname']['label'] =  __($LabelArray['billing_label']['lastname']);
            $billingAddress['company']['label'] = __($LabelArray['billing_label']['company']);
            $billingAddress['street']['label'] =  __($LabelArray['billing_label']['street']);
            $billingAddress['city']['label'] =  __($LabelArray['billing_label']['city']);
            $billingAddress['region_id']['label'] =  __($LabelArray['billing_label']['state']);
            $billingAddress['postcode']['label'] = __($LabelArray['billing_label']['zip']);
            $billingAddress['country_id']['label'] =  __($LabelArray['billing_label']['country']);
            $billingAddress['telephone']['label'] = __($LabelArray['billing_label']['number']);
        }

        return $jsLayout;

    }

    public function getPlaceholderLayout($jsLayout){

        // change shipping field placeholder
        $placeholderArray = $this->_helper->getPlaceholder();
        $shippingForms = &$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'];

        $shippingForms['firstname']['placeholder'] = __($placeholderArray['shipping_placeholder']['firstname']);
        $shippingForms['lastname']['placeholder'] = __($placeholderArray['shipping_placeholder']['lastname']);
        $shippingForms['company']['placeholder'] = __($placeholderArray['shipping_placeholder']['company']);
        $shippingForms['street']['placeholder'] = __($placeholderArray['shipping_placeholder']['street']);
        $shippingForms['city']['placeholder'] = __($placeholderArray['shipping_placeholder']['city']);
        $shippingForms['region_id']['placeholder'] = __($placeholderArray['shipping_placeholder']['state']);
        $shippingForms['postcode']['placeholder'] = __($placeholderArray['shipping_placeholder']['zip']);
        $shippingForms['country_id']['placeholder'] = __($placeholderArray['shipping_placeholder']['country']);
        $shippingForms['telephone']['placeholder'] = __($placeholderArray['shipping_placeholder']['number']);

        // Change billing field placeholder for every payment method
        $paymentForms = $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'];

        foreach ($paymentForms as $paymentMethodForm => $paymentMethodValue) {

            $paymentMethodCode = str_replace('-form', '', $paymentMethodForm);

            $billingAddress = &$jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form']['children']['form-fields']['children'];

            if (!isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                ['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form'])) {
                continue;
            }
            $billingAddress['firstname']['placeholder'] = __($placeholderArray['billing_placeholder']['firstname']);
            $billingAddress['lastname']['placeholder'] =  __($placeholderArray['billing_placeholder']['lastname']);
            $billingAddress['company']['placeholder'] = __($placeholderArray['billing_placeholder']['company']);
            $billingAddress['street']['placeholder'] =  __($placeholderArray['billing_placeholder']['street']);
            $billingAddress['city']['placeholder'] =  __($placeholderArray['billing_placeholder']['city']);
            $billingAddress['region_id']['placeholder'] =  __($placeholderArray['billing_placeholder']['state']);
            $billingAddress['postcode']['placeholder'] = __($placeholderArray['billing_placeholder']['zip']);
            $billingAddress['country_id']['placeholder'] =  __($placeholderArray['billing_placeholder']['country']);
            $billingAddress['telephone']['placeholder'] = __($placeholderArray['billing_placeholder']['number']);
        }

        return $jsLayout;

    } 

    public function getOrderLayout($jsLayout){
        // change shipping field placeholder
        $orderArray = $this->_helper->getFeildSortOrder();
        $shippingForms = &$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'];

        $shippingForms['firstname']['sortOrder'] = __($orderArray['shipping_position']['firstname']);
        $shippingForms['lastname']['sortOrder'] = __($orderArray['shipping_position']['lastname']);
        $shippingForms['company']['sortOrder'] = __($orderArray['shipping_position']['company']);
        $shippingForms['street']['sortOrder'] = __($orderArray['shipping_position']['street']);
        $shippingForms['city']['sortOrder'] = __($orderArray['shipping_position']['city']);
        $shippingForms['region_id']['sortOrder'] = __($orderArray['shipping_position']['state']);
        $shippingForms['postcode']['sortOrder'] = __($orderArray['shipping_position']['zip']);
        $shippingForms['country_id']['sortOrder'] = __($orderArray['shipping_position']['country']);
        $shippingForms['telephone']['sortOrder'] = __($orderArray['shipping_position']['number']);

        // Change billing field placeholder for every payment method
        $paymentForms = $jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'];

        foreach ($paymentForms as $paymentMethodForm => $paymentMethodValue) {

            $paymentMethodCode = str_replace('-form', '', $paymentMethodForm);

            $billingAddress = &$jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form']['children']['form-fields']['children'];

            if (!isset($jsLayout['components']['checkout']['children']['steps']['children']['billing-step']['children']
                ['payment']['children']['payments-list']['children'][$paymentMethodCode . '-form'])) {
                continue;
            }
            $billingAddress['firstname']['sortOrder'] = __($orderArray['billing_position']['firstname']);
            $billingAddress['lastname']['sortOrder'] =  __($orderArray['billing_position']['lastname']);
            $billingAddress['company']['sortOrder'] = __($orderArray['billing_position']['company']);
            $billingAddress['street']['sortOrder'] =  __($orderArray['billing_position']['street']);
            $billingAddress['city']['sortOrder'] =  __($orderArray['billing_position']['city']);
            $billingAddress['region_id']['sortOrder'] =  __($orderArray['billing_position']['state']);
            $billingAddress['postcode']['sortOrder'] = __($orderArray['billing_position']['zip']);
            $billingAddress['country_id']['sortOrder'] =  __($orderArray['billing_position']['country']);
            $billingAddress['telephone']['sortOrder'] = __($orderArray['billing_position']['number']);
        }
        
        return $jsLayout;

    }

}