<?php
/**
 * Scale display
 *
 * @copyright Copyright &copy; 2016-2017 astrolog-online.net
 * @author Zemlyansky Alexander <meraponimaniya@mail.ru>
 * @package VisualChart
 * @since 0.1
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vulkan\VisualChart;

use vulkan\Core\SectionScale;

class VisualSectionScale extends SectionScale
{

    use CommonVisualParamsTrait;
    use SectionScaleVisualEngine;

    const DEFAULT_CSS_CLASS = 'vul-scale';

    /* @var $_chart \vulkan\Components\VisualChart */
    public $_chart;

    public function __construct($positions = null) {
        parent::__construct($positions);
        $this->canvas = VisualChart::$canvas;
    }

}