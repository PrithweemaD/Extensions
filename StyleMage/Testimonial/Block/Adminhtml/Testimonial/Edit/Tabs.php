<?php
namespace StyleMage\Testimonial\Block\Adminhtml\Testimonial\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_testimonial_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Testimonial Information'));
    }
}