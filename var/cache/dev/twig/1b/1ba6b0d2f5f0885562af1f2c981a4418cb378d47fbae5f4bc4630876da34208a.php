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
        $__internal_d10643ef98879911f2e30e80da22e63596b311b83415889b1830d34057fc0d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10643ef98879911f2e30e80da22e63596b311b83415889b1830d34057fc0d90->enter($__internal_d10643ef98879911f2e30e80da22e63596b311b83415889b1830d34057fc0d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_eb327c4a0f0d606574d70294a4ace9bda28dfd9dda9c3154426c458cc75d2e8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb327c4a0f0d606574d70294a4ace9bda28dfd9dda9c3154426c458cc75d2e8c->enter($__internal_eb327c4a0f0d606574d70294a4ace9bda28dfd9dda9c3154426c458cc75d2e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10643ef98879911f2e30e80da22e63596b311b83415889b1830d34057fc0d90->leave($__internal_d10643ef98879911f2e30e80da22e63596b311b83415889b1830d34057fc0d90_prof);

        
        $__internal_eb327c4a0f0d606574d70294a4ace9bda28dfd9dda9c3154426c458cc75d2e8c->leave($__internal_eb327c4a0f0d606574d70294a4ace9bda28dfd9dda9c3154426c458cc75d2e8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d644b2386d1f92397b70727ceac12c5e72461181b5f38fa08207e060e2deb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d644b2386d1f92397b70727ceac12c5e72461181b5f38fa08207e060e2deb6->enter($__internal_00d644b2386d1f92397b70727ceac12c5e72461181b5f38fa08207e060e2deb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a06b26a09868ff159794ccc1304d0a8b17944462f07e93659817c37352f52ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06b26a09868ff159794ccc1304d0a8b17944462f07e93659817c37352f52ef1->enter($__internal_a06b26a09868ff159794ccc1304d0a8b17944462f07e93659817c37352f52ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <img src=\"/pictures/carousel/pic1.jpeg\" width=\"1920px\" height=\"500px\" style=\"z-index: 1;\">
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
        
        $__internal_a06b26a09868ff159794ccc1304d0a8b17944462f07e93659817c37352f52ef1->leave($__internal_a06b26a09868ff159794ccc1304d0a8b17944462f07e93659817c37352f52ef1_prof);

        
        $__internal_00d644b2386d1f92397b70727ceac12c5e72461181b5f38fa08207e060e2deb6->leave($__internal_00d644b2386d1f92397b70727ceac12c5e72461181b5f38fa08207e060e2deb6_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e4d8c87d70b9b225364556c8a60d5292c88a07a7e40e1a79335e6c3f6c36d4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d8c87d70b9b225364556c8a60d5292c88a07a7e40e1a79335e6c3f6c36d4a4->enter($__internal_e4d8c87d70b9b225364556c8a60d5292c88a07a7e40e1a79335e6c3f6c36d4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_691e7631441dd1772cd10f62ea7079bef39715f9063b685e6ab79f0fc090a97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691e7631441dd1772cd10f62ea7079bef39715f9063b685e6ab79f0fc090a97f->enter($__internal_691e7631441dd1772cd10f62ea7079bef39715f9063b685e6ab79f0fc090a97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_691e7631441dd1772cd10f62ea7079bef39715f9063b685e6ab79f0fc090a97f->leave($__internal_691e7631441dd1772cd10f62ea7079bef39715f9063b685e6ab79f0fc090a97f_prof);

        
        $__internal_e4d8c87d70b9b225364556c8a60d5292c88a07a7e40e1a79335e6c3f6c36d4a4->leave($__internal_e4d8c87d70b9b225364556c8a60d5292c88a07a7e40e1a79335e6c3f6c36d4a4_prof);

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
        return array (  86 => 21,  77 => 20,  63 => 14,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
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
    <img src=\"/pictures/carousel/pic1.jpeg\" width=\"1920px\" height=\"500px\" style=\"z-index: 1;\">
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
