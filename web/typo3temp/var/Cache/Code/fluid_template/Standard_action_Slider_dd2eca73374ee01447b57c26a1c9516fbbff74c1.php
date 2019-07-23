<?php

class Standard_action_Slider_dd2eca73374ee01447b57c26a1c9516fbbff74c1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
    <div class="front_slider">
        <div class="owl-carousel owl-carousel-slider">

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
                <div class="item_front_slide">
                    <div class="img_slider_animate"
                         style="background-image: url(';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['src'] = NULL;
$arguments10['relative'] = true;
$arguments10['width'] = NULL;
$arguments10['height'] = NULL;
$arguments10['maxW'] = NULL;
$arguments10['maxH'] = NULL;
$arguments10['minW'] = NULL;
$arguments10['minH'] = NULL;
$arguments10['format'] = NULL;
$arguments10['quality'] = NULL;
$arguments10['treatIdAsReference'] = false;
$arguments10['canvasWidth'] = NULL;
$arguments10['canvasHeight'] = NULL;
$arguments10['canvasColor'] = NULL;
$arguments10['transparencyColor'] = NULL;
$arguments10['crop'] = NULL;
$array12 = array (
);$arguments10['src'] = $renderingContext->getVariableProvider()->getByPath('item.data_tx_slider_image.0', $array12);

$output9 .= FluidTYPO3\Vhs\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= ');"></div>
                    <div class="animated fadeInRight slow content__slider">
                        <div class="mw1150">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '<h2>';
$array19 = array (
);
$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.tx_slider_header', $array19)]);

$output18 .= '</h2>';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('item.data.tx_slider_header', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output9 .= '
                        </div>
                    </div>
                </div>
            ';
return $output9;
};
$arguments6 = array();
$arguments6['each'] = NULL;
$arguments6['as'] = NULL;
$arguments6['key'] = NULL;
$arguments6['reverse'] = false;
$arguments6['iteration'] = NULL;
$array8 = array (
);$arguments6['each'] = $renderingContext->getVariableProvider()->getByPath('data_tx_slider_slide', $array8);
$arguments6['as'] = 'item';

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
        </div>

        <div class="right_social">
            <ul>
                <li class="scrol_to_block"><a href="#scrollposition1"> <img
                        src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['path'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['absolute'] = false;
$arguments20['path'] = 'Images/mouse.png';
$arguments20['extensionName'] = 'kpww';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output5 .= '"> </a></li>
            </ul>
        </div>
    </div>
';
return $output5;
};
$arguments0 = array();
$arguments0['then'] = NULL;
$arguments0['else'] = NULL;
$arguments0['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2 = array();
$array3 = array (
);$array2['0'] = $renderingContext->getVariableProvider()->getByPath('data_tx_slider_slide', $array3);

$expression4 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments0['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression4(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)
					),
					$renderingContext
				);
$arguments0['__thenClosure'] = $renderChildrenClosure1;

return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments0, $renderChildrenClosure1, $renderingContext);
}


}
#