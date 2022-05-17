<?php
/**
 * Copyright © Bymaze, All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bymaze\CheckoutALC\Helper;

Class Data{

    /**
    * @var \Magento\Framework\App\Config\ScopeConfigInterface
    */
    protected $scopeConfig;

    /**
    * shipping form label layout change config path
    */
    const XML_PATH_SIPPING_FIRSTNAME = 'bymaze/layout/shipping_firstname';
    const XML_PATH_SIPPING_LASTNAME = 'bymaze/layout/shipping_lastname';
    const XML_PATH_SIPPING_COMPANY = 'bymaze/layout/shipping_company';
    const XML_PATH_SIPPING_STREET = 'bymaze/layout/shipping_street';
    const XML_PATH_SIPPING_CITY = 'bymaze/layout/shipping_city';
    const XML_PATH_SIPPING_STATE = 'bymaze/layout/shipping_state';
    const XML_PATH_SIPPING_ZIP = 'bymaze/layout/shipping_zip';
    const XML_PATH_SIPPING_COUNTRY = 'bymaze/layout/shipping_country';
    const XML_PATH_SIPPING_NUMBER = 'bymaze/layout/shipping_number';

    /**
    * Billing form label layout change config path
    */
    const XML_PATH_BILLING_FIRSTNAME = 'bymaze/layout/billing_firstname';
    const XML_PATH_BILLING_LASTNAME = 'bymaze/layout/billing_lastname';
    const XML_PATH_BILLING_COMPANY = 'bymaze/layout/billing_company';
    const XML_PATH_BILLING_STREET = 'bymaze/layout/billing_street';
    const XML_PATH_BILLING_CITY = 'bymaze/layout/billing_city';
    const XML_PATH_BILLING_STATE = 'bymaze/layout/billing_state';
    const XML_PATH_BILLING_ZIP = 'bymaze/layout/billing_zip';
    const XML_PATH_BILLING_COUNTRY = 'bymaze/layout/billing_country';
    const XML_PATH_BILLING_NUMBER = 'bymaze/layout/billing_number';

    /**
    * shipping form placeholder layout change config path
    */
    const XML_PATH_SIPPING_PLACEHOLDER_FIRSTNAME = 'bymaze/placeholder/shipping_placeholder_firstname';
    const XML_PATH_SIPPING_PLACEHOLDER_LASTNAME = 'bymaze/placeholder/shipping_placeholder_lastname';
    const XML_PATH_SIPPING_PLACEHOLDER_COMPANY = 'bymaze/placeholder/shipping_placeholder_company';
    const XML_PATH_SIPPING_PLACEHOLDER_STREET = 'bymaze/placeholder/shipping_placeholder_street';
    const XML_PATH_SIPPING_PLACEHOLDER_CITY = 'bymaze/placeholder/shipping_placeholder_city';
    const XML_PATH_SIPPING_PLACEHOLDER_STATE = 'bymaze/placeholder/shipping_placeholder_state';
    const XML_PATH_SIPPING_PLACEHOLDER_ZIP = 'bymaze/placeholder/shipping_placeholder_zip';
    const XML_PATH_SIPPING_PLACEHOLDER_COUNTRY = 'bymaze/placeholder/shipping_placeholder_country';
    const XML_PATH_SIPPING_PLACEHOLDER_NUMBER = 'bymaze/placeholder/shipping_placeholder_number';

    /**
    * Billing form placeholder layout change config path
    */
    const XML_PATH_BILLING_PLACEHOLDER_FIRSTNAME = 'bymaze/placeholder/billing_placeholder_firstname';
    const XML_PATH_BILLING_PLACEHOLDER_LASTNAME = 'bymaze/placeholder/billing_placeholder_lastname';
    const XML_PATH_BILLING_PLACEHOLDER_COMPANY = 'bymaze/placeholder/billing_placeholder_company';
    const XML_PATH_BILLING_PLACEHOLDER_STREET = 'bymaze/placeholder/billing_placeholder_street';
    const XML_PATH_BILLING_PLACEHOLDER_CITY = 'bymaze/placeholder/billing_placeholder_city';
    const XML_PATH_BILLING_PLACEHOLDER_STATE = 'bymaze/placeholder/billing_placeholder_state';
    const XML_PATH_BILLING_PLACEHOLDER_ZIP = 'bymaze/placeholder/billing_placeholder_zip';
    const XML_PATH_BILLING_PLACEHOLDER_COUNTRY = 'bymaze/placeholder/billing_placeholder_country';
    const XML_PATH_BILLING_PLACEHOLDER_NUMBER = 'bymaze/placeholder/billing_placeholder_number';

    /**
    * shipping form position layout change config path
    */
    const XML_PATH_SIPPING_ORDER_FIRSTNAME = 'bymaze/position/shipping_position_firstname';
    const XML_PATH_SIPPING_ORDER_LASTNAME = 'bymaze/position/shipping_position_lastname';
    const XML_PATH_SIPPING_ORDER_COMPANY = 'bymaze/position/shipping_position_company';
    const XML_PATH_SIPPING_ORDER_STREET = 'bymaze/position/shipping_position_street';
    const XML_PATH_SIPPING_ORDER_CITY = 'bymaze/position/shipping_position_city';
    const XML_PATH_SIPPING_ORDER_STATE = 'bymaze/position/shipping_position_state';
    const XML_PATH_SIPPING_ORDER_ZIP = 'bymaze/position/shipping_position_zip';
    const XML_PATH_SIPPING_ORDER_COUNTRY = 'bymaze/position/shipping_position_country';
    const XML_PATH_SIPPING_ORDER_NUMBER = 'bymaze/position/shipping_position_number';

    /**
    * Billing form position layout change ORDER
    */
    const XML_PATH_BILLING_ORDER_FIRSTNAME = 'bymaze/position/billing_position_firstname';
    const XML_PATH_BILLING_ORDER_LASTNAME = 'bymaze/position/billing_position_lastname';
    const XML_PATH_BILLING_ORDER_COMPANY = 'bymaze/position/billing_position_company';
    const XML_PATH_BILLING_ORDER_STREET = 'bymaze/position/billing_position_street';
    const XML_PATH_BILLING_ORDER_CITY = 'bymaze/position/billing_position_city';
    const XML_PATH_BILLING_ORDER_STATE = 'bymaze/position/billing_position_state';
    const XML_PATH_BILLING_ORDER_ZIP = 'bymaze/position/billing_position_zip';
    const XML_PATH_BILLING_ORDER_COUNTRY = 'bymaze/position/billing_position_country';
    const XML_PATH_BILLING_ORDER_NUMBER = 'bymaze/position/billing_position_number';


    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getLabel(){

        // shiiping form label 
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_NUMBER, $storeScope);

        $shippingLabelArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );

        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_BILLING_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_BILLING_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_BILLING_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_BILLING_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_BILLING_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_BILLING_NUMBER, $storeScope);

        $billingLabelArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );
        return array('shipping_label'=>$shippingLabelArray, 'billing_label'=>$billingLabelArray);
    }

    public function getPlaceholder(){

        // shipping form placeholder
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_PLACEHOLDER_NUMBER, $storeScope);

        $shippingPlaceholderArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );

        // billing form placeholder
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_BILLING_PLACEHOLDER_NUMBER, $storeScope);

        $billingLabelArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );
        return array('shipping_placeholder' => $shippingPlaceholderArray, 'billing_placeholder' => $billingLabelArray);


    }

    public function getFeildSortOrder(){
        // shipping form placeholder
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_SIPPING_ORDER_NUMBER, $storeScope);
        $shippingPlaceholderArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );

        // billing form placeholder
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $firstname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_FIRSTNAME, $storeScope);
        $lastname = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_LASTNAME, $storeScope);
        $company = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_COMPANY, $storeScope);
        $street = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_STREET, $storeScope);
        $city = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_CITY, $storeScope);
        $state = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_STATE, $storeScope);
        $zip = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_ZIP, $storeScope);
        $country = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_COUNTRY, $storeScope);
        $number = $this->scopeConfig->getValue(self::XML_PATH_BILLING_ORDER_NUMBER, $storeScope);

        $billingLabelArray = array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'company'=>$company,
            'street'=>$street,
            'city'=>$city,
            'state'=>$state,
            'zip'=>$zip,
            'country'=>$country,
            'number'=>$number
        );
        return array('shipping_position' => $shippingPlaceholderArray, 'billing_position' => $billingLabelArray);
        

    }
}