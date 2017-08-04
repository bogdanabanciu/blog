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
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed8ac558e72340c1b541c9b4268ac85e8b84e1e57e90b8d9c91bd5f44067dc4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8ac558e72340c1b541c9b4268ac85e8b84e1e57e90b8d9c91bd5f44067dc4b->enter($__internal_ed8ac558e72340c1b541c9b4268ac85e8b84e1e57e90b8d9c91bd5f44067dc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_8662c896c699a7eb3559ad5b26145ee95d49c2d5e17731f44ee7e6050112a79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8662c896c699a7eb3559ad5b26145ee95d49c2d5e17731f44ee7e6050112a79c->enter($__internal_8662c896c699a7eb3559ad5b26145ee95d49c2d5e17731f44ee7e6050112a79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8ac558e72340c1b541c9b4268ac85e8b84e1e57e90b8d9c91bd5f44067dc4b->leave($__internal_ed8ac558e72340c1b541c9b4268ac85e8b84e1e57e90b8d9c91bd5f44067dc4b_prof);

        
        $__internal_8662c896c699a7eb3559ad5b26145ee95d49c2d5e17731f44ee7e6050112a79c->leave($__internal_8662c896c699a7eb3559ad5b26145ee95d49c2d5e17731f44ee7e6050112a79c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f198add53ee64b972175ea20f382e1d5493c45064b55ec0728db85a0b9573fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f198add53ee64b972175ea20f382e1d5493c45064b55ec0728db85a0b9573fd0->enter($__internal_f198add53ee64b972175ea20f382e1d5493c45064b55ec0728db85a0b9573fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a8e1f3e46ea19779b93727202772485279c575f151434f39b8c4cb4b62ed48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8e1f3e46ea19779b93727202772485279c575f151434f39b8c4cb4b62ed48a->enter($__internal_3a8e1f3e46ea19779b93727202772485279c575f151434f39b8c4cb4b62ed48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3a8e1f3e46ea19779b93727202772485279c575f151434f39b8c4cb4b62ed48a->leave($__internal_3a8e1f3e46ea19779b93727202772485279c575f151434f39b8c4cb4b62ed48a_prof);

        
        $__internal_f198add53ee64b972175ea20f382e1d5493c45064b55ec0728db85a0b9573fd0->leave($__internal_f198add53ee64b972175ea20f382e1d5493c45064b55ec0728db85a0b9573fd0_prof);

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
        return array (  64 => 14,  62 => 13,  49 => 4,  40 => 3,  11 => 1,);
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

", "contact/contact.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\contact\\contact.html.twig");
    }
}
