<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da203360fbd8b38955c4f7f1be0a4727edd2dded970099835661620cc2ed47b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da203360fbd8b38955c4f7f1be0a4727edd2dded970099835661620cc2ed47b1->enter($__internal_da203360fbd8b38955c4f7f1be0a4727edd2dded970099835661620cc2ed47b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6891884068745bf8b126cdd232e7018240da32ecea4c2f6c35ed00e1cc947c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6891884068745bf8b126cdd232e7018240da32ecea4c2f6c35ed00e1cc947c90->enter($__internal_6891884068745bf8b126cdd232e7018240da32ecea4c2f6c35ed00e1cc947c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da203360fbd8b38955c4f7f1be0a4727edd2dded970099835661620cc2ed47b1->leave($__internal_da203360fbd8b38955c4f7f1be0a4727edd2dded970099835661620cc2ed47b1_prof);

        
        $__internal_6891884068745bf8b126cdd232e7018240da32ecea4c2f6c35ed00e1cc947c90->leave($__internal_6891884068745bf8b126cdd232e7018240da32ecea4c2f6c35ed00e1cc947c90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6261818a47c409c2b57633cfba3552a1b40241996eb5632de2343479a83a7146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6261818a47c409c2b57633cfba3552a1b40241996eb5632de2343479a83a7146->enter($__internal_6261818a47c409c2b57633cfba3552a1b40241996eb5632de2343479a83a7146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a69dc665e84738a01d61b3b34aa9d26ecaed36c072da160026220e0d53cc3df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69dc665e84738a01d61b3b34aa9d26ecaed36c072da160026220e0d53cc3df2->enter($__internal_a69dc665e84738a01d61b3b34aa9d26ecaed36c072da160026220e0d53cc3df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a69dc665e84738a01d61b3b34aa9d26ecaed36c072da160026220e0d53cc3df2->leave($__internal_a69dc665e84738a01d61b3b34aa9d26ecaed36c072da160026220e0d53cc3df2_prof);

        
        $__internal_6261818a47c409c2b57633cfba3552a1b40241996eb5632de2343479a83a7146->leave($__internal_6261818a47c409c2b57633cfba3552a1b40241996eb5632de2343479a83a7146_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00cf5b207de8fd23adbc8d99d062e87dabb9f41945703008ccc035c032b19e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00cf5b207de8fd23adbc8d99d062e87dabb9f41945703008ccc035c032b19e73->enter($__internal_00cf5b207de8fd23adbc8d99d062e87dabb9f41945703008ccc035c032b19e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b4459e7c2cb101c46f3039274cca540aaf2cfd5f4e8ace7d6fc69b8594eb8457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4459e7c2cb101c46f3039274cca540aaf2cfd5f4e8ace7d6fc69b8594eb8457->enter($__internal_b4459e7c2cb101c46f3039274cca540aaf2cfd5f4e8ace7d6fc69b8594eb8457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b4459e7c2cb101c46f3039274cca540aaf2cfd5f4e8ace7d6fc69b8594eb8457->leave($__internal_b4459e7c2cb101c46f3039274cca540aaf2cfd5f4e8ace7d6fc69b8594eb8457_prof);

        
        $__internal_00cf5b207de8fd23adbc8d99d062e87dabb9f41945703008ccc035c032b19e73->leave($__internal_00cf5b207de8fd23adbc8d99d062e87dabb9f41945703008ccc035c032b19e73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e6b185510e1df7571b55e881da512ba740cda0212af4bda23cf0c9f6746989e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6b185510e1df7571b55e881da512ba740cda0212af4bda23cf0c9f6746989e->enter($__internal_4e6b185510e1df7571b55e881da512ba740cda0212af4bda23cf0c9f6746989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e78c77e571876a74c1b95f64f2293efb736a0d6cd24ea7346fe11025a7f1777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e78c77e571876a74c1b95f64f2293efb736a0d6cd24ea7346fe11025a7f1777->enter($__internal_9e78c77e571876a74c1b95f64f2293efb736a0d6cd24ea7346fe11025a7f1777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9e78c77e571876a74c1b95f64f2293efb736a0d6cd24ea7346fe11025a7f1777->leave($__internal_9e78c77e571876a74c1b95f64f2293efb736a0d6cd24ea7346fe11025a7f1777_prof);

        
        $__internal_4e6b185510e1df7571b55e881da512ba740cda0212af4bda23cf0c9f6746989e->leave($__internal_4e6b185510e1df7571b55e881da512ba740cda0212af4bda23cf0c9f6746989e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Blog\\aglimpseofhappiness\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
