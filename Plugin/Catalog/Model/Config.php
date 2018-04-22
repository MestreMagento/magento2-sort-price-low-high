<?php

namespace MestreMagento\SortPriceLowHigh\Plugin\Catalog\Model;

class Config
{
    public function afterGetAttributeUsedForSortByArray(
    \Magento\Catalog\Model\Config $catalogConfig,
    $options
    ) {

        $options['low_to_high'] = __('Menores Preços');
        $options['high_to_low'] = __('Maiores Preços');
        return $options;

    }

}