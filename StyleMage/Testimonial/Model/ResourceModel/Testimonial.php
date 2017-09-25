<?php
/**
 * Copyright © 2015 StyleMage. All rights reserved.
 */
namespace StyleMage\Testimonial\Model\ResourceModel;

/**
 * Testimonial resource
 */
class Testimonial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('testimonials', 'id');
    }

  
}
