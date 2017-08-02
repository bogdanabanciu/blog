<?php

/* /forms/contactForm.html.twig */
class __TwigTemplate_51b56e417a4f2eed4052f9737ab56781188da0ef13a13f3f6bcfe55b6410e555 extends Twig_Template
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
        $__internal_95ea8954ca28a8bb80cf20c0d1ab97b2e5bb2e0849060889e524b73795d11239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ea8954ca28a8bb80cf20c0d1ab97b2e5bb2e0849060889e524b73795d11239->enter($__internal_95ea8954ca28a8bb80cf20c0d1ab97b2e5bb2e0849060889e524b73795d11239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/forms/contactForm.html.twig"));

        $__internal_1f9d44cfeb732e48a95605d4749d4445810f73d2b17d13de04ef42d001c7624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9d44cfeb732e48a95605d4749d4445810f73d2b17d13de04ef42d001c7624d->enter($__internal_1f9d44cfeb732e48a95605d4749d4445810f73d2b17d13de04ef42d001c7624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/forms/contactForm.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["contactForm"] ?? $this->getContext($context, "contactForm")), 'form_start', array("attr" => array("id" => "contactForm")));
        echo "
    <div style=\"display: inline-block;\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["contactForm"] ?? $this->getContext($context, "contactForm")), "yourName", array()), 'row', array("label" => "Your Name (required)", "attr" => array("style" => "width: 350px")));
        // line 6
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["contactForm"] ?? $this->getContext($context, "contactForm")), "yourEmail", array()), 'row', array("label" => "Your Email (required)", "attr" => array("style" => "width: 350px")));
        // line 10
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["contactForm"] ?? $this->getContext($context, "contactForm")), "subject", array()), 'row', array("label" => "Subject", "attr" => array("style" => "width: 350px")));
        // line 14
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["contactForm"] ?? $this->getContext($context, "contactForm")), "yourMessage", array()), 'row', array("label" => "Your message", "attr" => array("style" => "width: 500px; height: 200px")));
        // line 18
        echo "
        <input class=\" btn btn-secondary\" type=\"submit\" value=\"Send Message\">
    </div>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["contactForm"] ?? $this->getContext($context, "contactForm")), 'form_end');
        
        $__internal_95ea8954ca28a8bb80cf20c0d1ab97b2e5bb2e0849060889e524b73795d11239->leave($__internal_95ea8954ca28a8bb80cf20c0d1ab97b2e5bb2e0849060889e524b73795d11239_prof);

        
        $__internal_1f9d44cfeb732e48a95605d4749d4445810f73d2b17d13de04ef42d001c7624d->leave($__internal_1f9d44cfeb732e48a95605d4749d4445810f73d2b17d13de04ef42d001c7624d_prof);

    }

    public function getTemplateName()
    {
        return "/forms/contactForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  47 => 18,  45 => 15,  42 => 14,  40 => 11,  37 => 10,  35 => 7,  32 => 6,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(contactForm, {'attr' : {'id' : 'contactForm'}}) }}
    <div style=\"display: inline-block;\">
        {{ form_row(contactForm.yourName,  {
            'label' : 'Your Name (required)',
            'attr'  : { 'style' : 'width: 350px'}
        }) }}
        {{ form_row(contactForm.yourEmail,  {
            'label' : 'Your Email (required)',
            'attr'  : { 'style' : 'width: 350px'}
        }) }}
        {{ form_row(contactForm.subject,  {
            'label' : 'Subject',
            'attr'  : { 'style' : 'width: 350px'}
        }) }}
        {{ form_row(contactForm.yourMessage,  {
            'label' : 'Your message',
            'attr'  : { 'style' : 'width: 500px; height: 200px'}
        }) }}
        <input class=\" btn btn-secondary\" type=\"submit\" value=\"Send Message\">
    </div>
{{ form_end(contactForm) }}", "/forms/contactForm.html.twig", "D:\\Blog\\aglimpseofhappiness\\app\\Resources\\views\\forms\\contactForm.html.twig");
    }
}
