<?php

namespace ps_metrics_module_v4_0_5;

class Constant_Check extends \Module
{
    public function __construct()
    {
        $this->name = 'constants_check';
        $this->tab = 'advertising_marketing';
        $this->version = '1.0.0';
        $this->author = 'PrestaShopCorp';
        $this->need_instance = 0;
        // This constant must trigger an error on PHPStan below PS 1.6.0.11
        $value = \_PS_PRICE_COMPUTE_PRECISION_;
    }
}
