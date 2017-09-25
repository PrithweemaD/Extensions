<?php
/**
 * Copyright © 2015 StyleMage . All rights reserved.
 */
namespace StyleMage\Testimonial\Block\Index;
use StyleMage\Testimonial\Block\BaseBlock;
class Index extends BaseBlock
{
	public function getTestimonialSubmitAction()
	{
		return $this->getUrl('testimonial/index/post', ['_secure' => true]);
	}
	
}
