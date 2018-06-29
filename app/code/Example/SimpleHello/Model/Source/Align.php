<?php

namespace Example\SimpleHello\Model\Source;


class Align implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'left',
                'label' => __('Left Position')
            ),
            array(
                'value' => 'center',
                'label' => __('Center Position')
            )
        );
    }

    public function toArray()
    {
        return ['left' => __('Left Position'),
                'center' => __('Center Position')
            ];
    }
}