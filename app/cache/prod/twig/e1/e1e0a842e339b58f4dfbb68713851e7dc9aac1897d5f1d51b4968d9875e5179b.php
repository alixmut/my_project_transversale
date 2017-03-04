<?php

/* @Recommandation/js/jquery.flexisel.js */
class __TwigTemplate_27b25b3642f77b8578d3489bed34a793e43f8dcf59b0c8305f366d62acc9b108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*
* File: jquery.flexisel.js
* Version: 1.0.0
* Description: Responsive carousel jQuery plugin
* Author: 9bit Studios
* Copyright 2012, 9bit Studios
* http://www.9bitstudios.com
* Free to use and abuse under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
*/

(function (\$) {

    \$.fn.flexisel = function (options) {

        var defaults = \$.extend({
    \t\tvisibleItems: 4,
    \t\tanimationSpeed: 200,
    \t\tautoPlay: false,
    \t\tautoPlaySpeed: 3000,    \t\t
    \t\tpauseOnHover: true,
\t\t\tsetMaxWidthAndHeight: false,
    \t\tenableResponsiveBreakpoints: false,
    \t\tresponsiveBreakpoints: { 
\t    \t\tportrait: { 
\t    \t\t\tchangePoint:480,
\t    \t\t\tvisibleItems: 1
\t    \t\t}, 
\t    \t\tlandscape: { 
\t    \t\t\tchangePoint:640,
\t    \t\t\tvisibleItems: 2
\t    \t\t},
\t    \t\ttablet: { 
\t    \t\t\tchangePoint:768,
\t    \t\t\tvisibleItems: 3
\t    \t\t}
        \t}
        }, options);
        
\t\t/******************************
\t\tPrivate Variables
\t\t*******************************/         
        
        var object = \$(this);
\t\tvar settings = \$.extend(defaults, options);        
\t\tvar itemsWidth; // Declare the global width of each item in carousel
\t\tvar canNavigate = true; 
        var itemsVisible = settings.visibleItems; 
        
\t\t/******************************
\t\tPublic Methods
\t\t*******************************/        
        
        var methods = {
        \t\t
\t\t\tinit: function() {
\t\t\t\t
        \t\treturn this.each(function () {
        \t\t\tmethods.appendHTML();
        \t\t\tmethods.setEventHandlers();      \t\t\t
        \t\t\tmethods.initializeItems();
\t\t\t\t});
\t\t\t},

\t\t\t/******************************
\t\t\tInitialize Items
\t\t\t*******************************/\t\t\t
\t\t\t
\t\t\tinitializeItems: function() {
\t\t\t\t
\t\t\t\tvar listParent = object.parent();
\t\t\t\tvar innerHeight = listParent.height(); 
\t\t\t\tvar childSet = object.children();
\t\t\t\t
    \t\t\tvar innerWidth = listParent.width(); // Set widths
    \t\t\titemsWidth = (innerWidth)/itemsVisible;
    \t\t\tchildSet.width(itemsWidth);
    \t\t\tchildSet.last().insertBefore(childSet.first());
    \t\t\tchildSet.last().insertBefore(childSet.first());
    \t\t\tobject.css({'left' : -itemsWidth}); 

    \t\t\tobject.fadeIn();
\t\t\t\t\$(window).trigger(\"resize\"); // needed to position arrows correctly

\t\t\t},
\t\t\t
\t\t\t
\t\t\t/******************************
\t\t\tAppend HTML
\t\t\t*******************************/\t\t\t
\t\t\t
\t\t\tappendHTML: function() {
\t\t\t\t
   \t\t\t \tobject.addClass(\"nbs-flexisel-ul\");
   \t\t\t \tobject.wrap(\"<div class='nbs-flexisel-container'><div class='nbs-flexisel-inner'></div></div>\");
   \t\t\t \tobject.find(\"li\").addClass(\"nbs-flexisel-item\");
 
   \t\t\t \tif(settings.setMaxWidthAndHeight) {
\t   \t\t\t \tvar baseWidth = \$(\".nbs-flexisel-item > img\").width();
\t   \t\t\t \tvar baseHeight = \$(\".nbs-flexisel-item > img\").height();
\t   \t\t\t \t\$(\".nbs-flexisel-item > img\").css(\"max-width\", baseWidth);
\t   \t\t\t \t\$(\".nbs-flexisel-item > img\").css(\"max-height\", baseHeight);
   \t\t\t \t}
 
   \t\t\t \t\$(\"<div class='nbs-flexisel-nav-left'></div><div class='nbs-flexisel-nav-right'></div>\").insertAfter(object);
   \t\t\t \tvar cloneContent = object.children().clone();
   \t\t\t \tobject.append(cloneContent);
\t\t\t},
\t\t\t\t\t
\t\t\t
\t\t\t/******************************
\t\t\tSet Event Handlers
\t\t\t*******************************/
\t\t\tsetEventHandlers: function() {
\t\t\t\t
\t\t\t\tvar listParent = object.parent();
\t\t\t\tvar childSet = object.children();
\t\t\t\tvar leftArrow = listParent.find(\$(\".nbs-flexisel-nav-left\"));
\t\t\t\tvar rightArrow = listParent.find(\$(\".nbs-flexisel-nav-right\"));
\t\t\t\t
\t\t\t\t\$(window).on(\"resize\", function(event){
\t\t\t\t\t
\t\t\t\t\tmethods.setResponsiveEvents();
\t\t\t\t\t
\t\t\t\t\tvar innerWidth = \$(listParent).width();
\t\t\t\t\tvar innerHeight = \$(listParent).height(); 
\t\t\t\t\t
\t\t\t\t\titemsWidth = (innerWidth)/itemsVisible;
\t\t\t\t\t
\t\t\t\t\tchildSet.width(itemsWidth);
\t\t\t\t\tobject.css({'left' : -itemsWidth});
\t\t\t\t\t
\t\t\t\t\tvar halfArrowHeight = (leftArrow.height())/2;
\t\t\t\t\tvar arrowMargin = (innerHeight/2) - halfArrowHeight;
\t\t\t\t\tleftArrow.css(\"top\", arrowMargin + \"px\");
\t\t\t\t\trightArrow.css(\"top\", arrowMargin + \"px\");
\t\t\t\t\t
\t\t\t\t});\t\t\t\t\t
\t\t\t\t
\t\t\t\t\$(leftArrow).on(\"click\", function (event) {
\t\t\t\t\tmethods.scrollLeft();
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(rightArrow).on(\"click\", function (event) {
\t\t\t\t\tmethods.scrollRight();
\t\t\t\t});
\t\t\t\t
\t\t\t\tif(settings.pauseOnHover == true) {
\t\t\t\t\t\$(\".nbs-flexisel-item\").on({
\t\t\t\t\t\tmouseenter: function () {
\t\t\t\t\t\t\tcanNavigate = false;
\t\t\t\t\t\t}, 
\t\t\t\t\t\tmouseleave: function () {
\t\t\t\t\t\t\tcanNavigate = true;
\t\t\t\t\t\t}
\t\t\t\t\t });
\t\t\t\t}

\t\t\t\tif(settings.autoPlay == true) {
\t\t\t\t\t
\t\t\t\t\tsetInterval(function () {
\t\t\t\t\t\tif(canNavigate == true)
\t\t\t\t\t\t\tmethods.scrollRight();
\t\t\t\t\t}, settings.autoPlaySpeed);
\t\t\t\t}
\t\t\t\t
\t\t\t},
\t\t\t
\t\t\t/******************************
\t\t\tSet Responsive Events
\t\t\t*******************************/\t\t\t
\t\t\t
\t\t\tsetResponsiveEvents: function() {
\t\t\t\tvar contentWidth = \$('html').width();
\t\t\t\t
\t\t\t\tif(settings.enableResponsiveBreakpoints == true) {
\t\t\t\t\tif(contentWidth < settings.responsiveBreakpoints.portrait.changePoint) {
\t\t\t\t\t\titemsVisible = settings.responsiveBreakpoints.portrait.visibleItems;
\t\t\t\t\t}
\t\t\t\t\telse if(contentWidth > settings.responsiveBreakpoints.portrait.changePoint && contentWidth < settings.responsiveBreakpoints.landscape.changePoint) {
\t\t\t\t\t\titemsVisible = settings.responsiveBreakpoints.landscape.visibleItems;
\t\t\t\t\t}
\t\t\t\t\telse if(contentWidth > settings.responsiveBreakpoints.landscape.changePoint && contentWidth < settings.responsiveBreakpoints.tablet.changePoint) {
\t\t\t\t\t\titemsVisible = settings.responsiveBreakpoints.tablet.visibleItems;
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\titemsVisible = settings.visibleItems;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},\t\t\t
\t\t\t
\t\t\t/******************************
\t\t\tScroll Left
\t\t\t*******************************/\t\t\t\t
\t\t\t
\t\t\tscrollLeft:function() {

\t\t\t\tif(canNavigate == true) {
\t\t\t\t\tcanNavigate = false;
\t\t\t\t\t
\t\t\t\t\tvar listParent = object.parent();
\t\t\t\t\tvar innerWidth = listParent.width();
\t\t\t\t\t
\t\t\t\t\titemsWidth = (innerWidth)/itemsVisible;
\t\t\t\t\t
\t\t\t\t\tvar childSet = object.children();
\t\t\t\t\t
\t\t\t\t\tobject.animate({
\t\t\t\t\t\t\t'left' : \"+=\" + itemsWidth
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\tqueue:false, 
\t\t\t\t\t\t\tduration:settings.animationSpeed,
\t\t\t\t\t\t\teasing: \"linear\",
\t\t\t\t\t\t\tcomplete: function() {  
\t\t\t\t\t\t\t\tchildSet.last().insertBefore(childSet.first()); // Get the first list item and put it after the last list item (that's how the infinite effects is made)   \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tmethods.adjustScroll();
\t\t\t\t\t\t\t\tcanNavigate = true; 
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t);
\t\t\t\t}
\t\t\t},
\t\t\t
\t\t\t/******************************
\t\t\tScroll Right
\t\t\t*******************************/\t\t\t\t
\t\t\t
\t\t\tscrollRight:function() {
\t\t\t\t
\t\t\t\tif(canNavigate == true) {
\t\t\t\t\tcanNavigate = false;
\t\t\t\t\t
\t\t\t\t\tvar listParent = object.parent();
\t\t\t\t\tvar innerWidth = listParent.width();
\t\t\t\t\t
\t\t\t\t\titemsWidth = (innerWidth)/itemsVisible;
\t\t\t\t\t
\t\t\t\t\tvar childSet = object.children();
\t\t\t\t\t
\t\t\t\t\tobject.animate({
\t\t\t\t\t\t\t'left' : \"-=\" + itemsWidth
\t\t\t\t\t\t},
\t\t\t\t\t\t{
\t\t\t\t\t\t\tqueue:false, 
\t\t\t\t\t\t\tduration:settings.animationSpeed,
\t\t\t\t\t\t\teasing: \"linear\",
\t\t\t\t\t\t\tcomplete: function() {  
\t\t\t\t\t\t\t\tchildSet.first().insertAfter(childSet.last()); // Get the first list item and put it after the last list item (that's how the infinite effects is made)   
\t\t\t\t\t\t\t\tmethods.adjustScroll();
\t\t\t\t\t\t\t\tcanNavigate = true; 
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t);
\t\t\t\t}
\t\t\t},
\t\t\t
\t\t\t/******************************
\t\t\tAdjust Scroll 
\t\t\t*******************************/
\t\t\t
\t\t\tadjustScroll: function() {
\t\t\t\t
\t\t\t\tvar listParent = object.parent();
\t\t\t\tvar childSet = object.children();\t\t\t\t
\t\t\t\t
\t\t\t\tvar innerWidth = listParent.width(); 
\t\t\t\titemsWidth = (innerWidth)/itemsVisible;
\t\t\t\tchildSet.width(itemsWidth);
\t\t\t\tobject.css({'left' : -itemsWidth});\t\t
\t\t\t}\t\t\t
        
        };
        
        if (methods[options]) { \t// \$(\"#element\").pluginName('methodName', 'arg1', 'arg2');
            return methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof options === 'object' || !options) { \t// \$(\"#element\").pluginName({ option: 1, option:2 });
            return methods.init.apply(this);  
        } else {
            \$.error( 'Method \"' +  method + '\" does not exist in flexisel plugin!');
        }        
};

})(jQuery);
";
    }

    public function getTemplateName()
    {
        return "@Recommandation/js/jquery.flexisel.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Recommandation/js/jquery.flexisel.js", "C:\\wamp\\www\\my_project_transversale\\src\\RecommandationBundle\\Resources\\views\\js\\jquery.flexisel.js");
    }
}
