<?php

class layout_Default_html_807f61cfd561992c0d06661284ac33685687d9ce extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$output0 = '';

$output0 .= '<div id="header">

    <div class="logo_top">
        <a href="#top">
            <img alt="logo" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['absolute'] = false;
$arguments1['path'] = 'Images/logo_top.png';
$arguments1['extensionName'] = 'kpww';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '">
            KPWW kancelaria prawnICZA
            <span>PASIERBIAK WASILEWSKI I WSPÓLNICY</span>
        </a>
    </div>

    <div class="mobile_hidden">

        <div class="navigation_nav">
            <nav>
                <ul class="left_part">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                        <li class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['then'] = 'active';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '">
                            <a href="';
$array12 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array12)]);

$output6 .= '" target="';
$array13 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.target', $array13)]);

$output6 .= '"
                               title="';
$array14 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array14)]);

$output6 .= '">
                                ';
$array15 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array15)]);

$output6 .= '
                            </a></li>
                    ';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array5);
$arguments3['as'] = 'mainnavigationItem';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
                </ul>
            </nav>
        </div>


    </div>


    <div class="mobile_toggle">
        <div class="line_mobile line_1"></div>
        <div class="line_mobile line_2"></div>
        <div class="line_mobile line_3"></div>
    </div>

</div>
<div id="main">
    <div class="top_block_type" style="background-image: url(';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['src'] = NULL;
$arguments16['relative'] = true;
$arguments16['width'] = NULL;
$arguments16['height'] = NULL;
$arguments16['maxW'] = NULL;
$arguments16['maxH'] = NULL;
$arguments16['minW'] = NULL;
$arguments16['minH'] = NULL;
$arguments16['format'] = NULL;
$arguments16['quality'] = NULL;
$arguments16['treatIdAsReference'] = false;
$arguments16['canvasWidth'] = NULL;
$arguments16['canvasHeight'] = NULL;
$arguments16['canvasColor'] = NULL;
$arguments16['transparencyColor'] = NULL;
$arguments16['crop'] = NULL;
$array18 = array (
);$arguments16['src'] = $renderingContext->getVariableProvider()->getByPath('files.0', $array18);

$output0 .= FluidTYPO3\Vhs\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= ');">
        <div class="mw1150">
            <h1>';
$array19 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.title', $array19)]);

$output0 .= '</h1>
        </div>
    </div>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['section'] = 'Main';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
</div>


<!-- FOOTER -->
<div id="footer" class="wow anumated fadeInUp">
    <div class="mw1150">
        <div class="bottom_footer clear">
            <div class="left_bk_foo">
                <ul>
                    <li>© 2018 KPWW</li>
                </ul>
            </div>

        </div>
    </div>
</div>

';

return $output0;
}


}
#