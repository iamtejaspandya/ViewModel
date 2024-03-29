<?php

namespace Tejas\ViewModelEx\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class MyNewViewModel implements ArgumentInterface
{
    public function getAdditionalDetails()
    {
        return 'Additional Product Details';
    }
}
