<?php
namespace StyleMage\Testimonial\Block\Adminhtml;
class Testimonial extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_testimonial';/*block grid.php directory*/
        $this->_blockGroup = 'StyleMage_Testimonial';
        $this->_headerText = __('Testimonial');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
