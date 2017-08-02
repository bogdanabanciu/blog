<?php

/* homepage/homepage.html.twig */
class __TwigTemplate_52ee1fca103f928bb10cc9e1fb311832f2bd24629717b4740c6029e9cdf77bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/homepage.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f9dc1bea47a0d20bb8146e2c7761b2d21b408a7ed1eb450bccb71875846dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f9dc1bea47a0d20bb8146e2c7761b2d21b408a7ed1eb450bccb71875846dd4->enter($__internal_36f9dc1bea47a0d20bb8146e2c7761b2d21b408a7ed1eb450bccb71875846dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $__internal_ab6bd237b6028caa996a6042362f4862dd175fcf855852251792afd5f2a8da97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6bd237b6028caa996a6042362f4862dd175fcf855852251792afd5f2a8da97->enter($__internal_ab6bd237b6028caa996a6042362f4862dd175fcf855852251792afd5f2a8da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f9dc1bea47a0d20bb8146e2c7761b2d21b408a7ed1eb450bccb71875846dd4->leave($__internal_36f9dc1bea47a0d20bb8146e2c7761b2d21b408a7ed1eb450bccb71875846dd4_prof);

        
        $__internal_ab6bd237b6028caa996a6042362f4862dd175fcf855852251792afd5f2a8da97->leave($__internal_ab6bd237b6028caa996a6042362f4862dd175fcf855852251792afd5f2a8da97_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3d3edcd222a48b5dd667893a49d3bf511680560ff604d9094a5b2729d8d7fe4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3edcd222a48b5dd667893a49d3bf511680560ff604d9094a5b2729d8d7fe4f->enter($__internal_3d3edcd222a48b5dd667893a49d3bf511680560ff604d9094a5b2729d8d7fe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_73ae8e268056192dab7b0879e775e32c6b6f43402c3d425fb25de118bf7d3db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ae8e268056192dab7b0879e775e32c6b6f43402c3d425fb25de118bf7d3db9->enter($__internal_73ae8e268056192dab7b0879e775e32c6b6f43402c3d425fb25de118bf7d3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_73ae8e268056192dab7b0879e775e32c6b6f43402c3d425fb25de118bf7d3db9->leave($__internal_73ae8e268056192dab7b0879e775e32c6b6f43402c3d425fb25de118bf7d3db9_prof);

        
        $__internal_3d3edcd222a48b5dd667893a49d3bf511680560ff604d9094a5b2729d8d7fe4f->leave($__internal_3d3edcd222a48b5dd667893a49d3bf511680560ff604d9094a5b2729d8d7fe4f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf2441067cb18b1159a94d0a2888a9c77168e622f6627888cfad34a3f6a8cb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2441067cb18b1159a94d0a2888a9c77168e622f6627888cfad34a3f6a8cb79->enter($__internal_cf2441067cb18b1159a94d0a2888a9c77168e622f6627888cfad34a3f6a8cb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e3e38610f63769ae417f66a20706544d1ddd39c775810f37e3924c2fbf62ae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e38610f63769ae417f66a20706544d1ddd39c775810f37e3924c2fbf62ae9f->enter($__internal_e3e38610f63769ae417f66a20706544d1ddd39c775810f37e3924c2fbf62ae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!-- Carousel -->
    <div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" style=\"height: 500px; width: 1920px;\">
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active carousel-image\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/carousel/pic1.jpeg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item carousel-image\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/carousel/pic3.jpg"), "html", null, true);
        echo "\">
            </div>
        </div>
        <!-- Left and right controls -->
        <div>
            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
        <div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <!-- End of Carousel -->

";
        
        $__internal_e3e38610f63769ae417f66a20706544d1ddd39c775810f37e3924c2fbf62ae9f->leave($__internal_e3e38610f63769ae417f66a20706544d1ddd39c775810f37e3924c2fbf62ae9f_prof);

        
        $__internal_cf2441067cb18b1159a94d0a2888a9c77168e622f6627888cfad34a3f6a8cb79->leave($__internal_cf2441067cb18b1159a94d0a2888a9c77168e622f6627888cfad34a3f6a8cb79_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7ccd3d4c9bf76b7bbe61d25f2a53e1a42a840ad42d6000c24d74e499febf7987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ccd3d4c9bf76b7bbe61d25f2a53e1a42a840ad42d6000c24d74e499febf7987->enter($__internal_7ccd3d4c9bf76b7bbe61d25f2a53e1a42a840ad42d6000c24d74e499febf7987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_643d20c672d19a697c88da2d86498fbb32a923ffeff669de3d576e9cdb6782a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643d20c672d19a697c88da2d86498fbb32a923ffeff669de3d576e9cdb6782a4->enter($__internal_643d20c672d19a697c88da2d86498fbb32a923ffeff669de3d576e9cdb6782a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    <hr>
    <ul class=\"nav nav-pills\" style=\"width: 500px; margin: 0 auto;\">
        <li class=\"list-style\"><a href=\"https://www.facebook.com/banciu.bogdana\" style=\" font-family: 'Segoe UI';\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> FACEBOOK</a></li>
        <li class=\"list-style\"><a href=\"https://www.instagram.com/bogdana.banciu/\" style=\"font-family: 'Segoe UI';\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> INSTAGRAM</a></li>
        <li class=\"list-style\"><a href=\"https://ro.pinterest.com/bogdana_banciu/\" style=\"font-family: 'Helvetica Neue'\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i> PINTEREST</a></li>
    </ul>
    <hr>

    <!-- SnapWidget -->
    <iframe src=\"https://snapwidget.com/embed/415030\" class=\"snapwidget-widget widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\"></iframe>

    <!-- Footer cu all rights reserved -->
    <div class=\"footer\">
        © 2017 Bogdana Banciu. All Rights Reserved.
    </div>
";
        
        $__internal_643d20c672d19a697c88da2d86498fbb32a923ffeff669de3d576e9cdb6782a4->leave($__internal_643d20c672d19a697c88da2d86498fbb32a923ffeff669de3d576e9cdb6782a4_prof);

        
        $__internal_7ccd3d4c9bf76b7bbe61d25f2a53e1a42a840ad42d6000c24d74e499febf7987->leave($__internal_7ccd3d4c9bf76b7bbe61d25f2a53e1a42a840ad42d6000c24d74e499febf7987_prof);

    }

    public function getTemplateName()
    {
        return "homepage/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  116 => 37,  86 => 16,  80 => 13,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block header %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <!-- Carousel -->
    <div id=\"myCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\" style=\"height: 500px; width: 1920px;\">
        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active carousel-image\">
                <img src=\"{{ asset(\"/pictures/carousel/pic1.jpeg\") }}\">
            </div>
            <div class=\"item carousel-image\">
                <img src=\"{{ asset(\"/pictures/carousel/pic3.jpg\") }}\">
            </div>
        </div>
        <!-- Left and right controls -->
        <div>
            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
        <div>
            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
    <!-- End of Carousel -->

{% endblock %}

{% block footer %}
    <hr>
    <ul class=\"nav nav-pills\" style=\"width: 500px; margin: 0 auto;\">
        <li class=\"list-style\"><a href=\"https://www.facebook.com/banciu.bogdana\" style=\" font-family: 'Segoe UI';\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i> FACEBOOK</a></li>
        <li class=\"list-style\"><a href=\"https://www.instagram.com/bogdana.banciu/\" style=\"font-family: 'Segoe UI';\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i> INSTAGRAM</a></li>
        <li class=\"list-style\"><a href=\"https://ro.pinterest.com/bogdana_banciu/\" style=\"font-family: 'Helvetica Neue'\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i> PINTEREST</a></li>
    </ul>
    <hr>

    <!-- SnapWidget -->
    <iframe src=\"https://snapwidget.com/embed/415030\" class=\"snapwidget-widget widget\" allowTransparency=\"true\" frameborder=\"0\" scrolling=\"no\"></iframe>

    <!-- Footer cu all rights reserved -->
    <div class=\"footer\">
        © 2017 Bogdana Banciu. All Rights Reserved.
    </div>
{% endblock %}
", "homepage/homepage.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\homepage\\homepage.html.twig");
    }
}
