<?php

/* contact/contact.html.twig */
class __TwigTemplate_634eaf816b5cc2a683b591f4ef78d0a08b0d9677c4d5633a7add9406a2affcd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ece1691cab16c22d071aa3f8f3e9c1946f8a9c2ace68a21d0eccc95c9551cc60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece1691cab16c22d071aa3f8f3e9c1946f8a9c2ace68a21d0eccc95c9551cc60->enter($__internal_ece1691cab16c22d071aa3f8f3e9c1946f8a9c2ace68a21d0eccc95c9551cc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_bd8e79e8a216f87fcb7d51cdcaed8f42c79e7281df96bb7c1c2373af94998b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8e79e8a216f87fcb7d51cdcaed8f42c79e7281df96bb7c1c2373af94998b43->enter($__internal_bd8e79e8a216f87fcb7d51cdcaed8f42c79e7281df96bb7c1c2373af94998b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ece1691cab16c22d071aa3f8f3e9c1946f8a9c2ace68a21d0eccc95c9551cc60->leave($__internal_ece1691cab16c22d071aa3f8f3e9c1946f8a9c2ace68a21d0eccc95c9551cc60_prof);

        
        $__internal_bd8e79e8a216f87fcb7d51cdcaed8f42c79e7281df96bb7c1c2373af94998b43->leave($__internal_bd8e79e8a216f87fcb7d51cdcaed8f42c79e7281df96bb7c1c2373af94998b43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fd538ce8bd568e0634a17ffcf2350c15b62b4b1bad35d0656257fc8baf19354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd538ce8bd568e0634a17ffcf2350c15b62b4b1bad35d0656257fc8baf19354->enter($__internal_8fd538ce8bd568e0634a17ffcf2350c15b62b4b1bad35d0656257fc8baf19354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ba855fd9a643af6993e1b16338cd1b1848b9b6fcc2257807c1a5c39dae672ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba855fd9a643af6993e1b16338cd1b1848b9b6fcc2257807c1a5c39dae672ec->enter($__internal_5ba855fd9a643af6993e1b16338cd1b1848b9b6fcc2257807c1a5c39dae672ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/pictures/carousel/pic1.jpeg"), "html", null, true);
        echo "\" width=\"1920px\" height=\"500px\" style=\"z-index: 1;\">
    <div class=\"container div-contact\">
        <div class=\"row row-contact\">
            <div class=\"col-md-10 col-md-push-1\">
                <div class=\"entry-inner\">
                    <h2 style=\"font-weight: bold; padding-top: 20px;\">Contact</h2>
                    <br>
                    <h4 style=\"font-weight: bold;\">Business Inquiries</h4>
                    <p>For business inquiries, please write to contact@aglimpseofhappiness.com, we will get back to you shortly.</p>
                    ";
        // line 13
        $this->loadTemplate("/forms/contactForm.html.twig", "contact/contact.html.twig", 13)->display($context);
        // line 14
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5ba855fd9a643af6993e1b16338cd1b1848b9b6fcc2257807c1a5c39dae672ec->leave($__internal_5ba855fd9a643af6993e1b16338cd1b1848b9b6fcc2257807c1a5c39dae672ec_prof);

        
        $__internal_8fd538ce8bd568e0634a17ffcf2350c15b62b4b1bad35d0656257fc8baf19354->leave($__internal_8fd538ce8bd568e0634a17ffcf2350c15b62b4b1bad35d0656257fc8baf19354_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_14f75b60026453dfc194752b8d6c69c8eef15150487cc92fa59dd1799e515a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f75b60026453dfc194752b8d6c69c8eef15150487cc92fa59dd1799e515a02->enter($__internal_14f75b60026453dfc194752b8d6c69c8eef15150487cc92fa59dd1799e515a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cd40ca272295911e68abaa208701ee2329bca132180f5ea842ba6f78dd0b2288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd40ca272295911e68abaa208701ee2329bca132180f5ea842ba6f78dd0b2288->enter($__internal_cd40ca272295911e68abaa208701ee2329bca132180f5ea842ba6f78dd0b2288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
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
        
        $__internal_cd40ca272295911e68abaa208701ee2329bca132180f5ea842ba6f78dd0b2288->leave($__internal_cd40ca272295911e68abaa208701ee2329bca132180f5ea842ba6f78dd0b2288_prof);

        
        $__internal_14f75b60026453dfc194752b8d6c69c8eef15150487cc92fa59dd1799e515a02->leave($__internal_14f75b60026453dfc194752b8d6c69c8eef15150487cc92fa59dd1799e515a02_prof);

    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  79 => 20,  65 => 14,  63 => 13,  50 => 4,  41 => 3,  11 => 1,);
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

{% block body %}
    <img src=\"{{ asset('/pictures/carousel/pic1.jpeg') }}\" width=\"1920px\" height=\"500px\" style=\"z-index: 1;\">
    <div class=\"container div-contact\">
        <div class=\"row row-contact\">
            <div class=\"col-md-10 col-md-push-1\">
                <div class=\"entry-inner\">
                    <h2 style=\"font-weight: bold; padding-top: 20px;\">Contact</h2>
                    <br>
                    <h4 style=\"font-weight: bold;\">Business Inquiries</h4>
                    <p>For business inquiries, please write to contact@aglimpseofhappiness.com, we will get back to you shortly.</p>
                    {% include '/forms/contactForm.html.twig' %}
                </div>
            </div>
        </div>
    </div>
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
", "contact/contact.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\contact\\contact.html.twig");
    }
}
