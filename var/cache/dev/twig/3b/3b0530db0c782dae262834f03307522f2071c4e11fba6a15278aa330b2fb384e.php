<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_451ea86b73250741738ee72c6da961278bc635426e329e19fbbbe8a62f805e8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451ea86b73250741738ee72c6da961278bc635426e329e19fbbbe8a62f805e8f->enter($__internal_451ea86b73250741738ee72c6da961278bc635426e329e19fbbbe8a62f805e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_81fbdbf54136dcc182ea4004a7c3efd6f9ad43fa2e466828b3d0ffce61696a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fbdbf54136dcc182ea4004a7c3efd6f9ad43fa2e466828b3d0ffce61696a8e->enter($__internal_81fbdbf54136dcc182ea4004a7c3efd6f9ad43fa2e466828b3d0ffce61696a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451ea86b73250741738ee72c6da961278bc635426e329e19fbbbe8a62f805e8f->leave($__internal_451ea86b73250741738ee72c6da961278bc635426e329e19fbbbe8a62f805e8f_prof);

        
        $__internal_81fbdbf54136dcc182ea4004a7c3efd6f9ad43fa2e466828b3d0ffce61696a8e->leave($__internal_81fbdbf54136dcc182ea4004a7c3efd6f9ad43fa2e466828b3d0ffce61696a8e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83f6683ca78af37105a27fb34eeba265e73197a10f284b0314c198ff17547481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83f6683ca78af37105a27fb34eeba265e73197a10f284b0314c198ff17547481->enter($__internal_83f6683ca78af37105a27fb34eeba265e73197a10f284b0314c198ff17547481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6da2dc026d59d5a5f06364fdcb7ab3e97409dccfc5a85deab452b4beafef73b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da2dc026d59d5a5f06364fdcb7ab3e97409dccfc5a85deab452b4beafef73b3->enter($__internal_6da2dc026d59d5a5f06364fdcb7ab3e97409dccfc5a85deab452b4beafef73b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6da2dc026d59d5a5f06364fdcb7ab3e97409dccfc5a85deab452b4beafef73b3->leave($__internal_6da2dc026d59d5a5f06364fdcb7ab3e97409dccfc5a85deab452b4beafef73b3_prof);

        
        $__internal_83f6683ca78af37105a27fb34eeba265e73197a10f284b0314c198ff17547481->leave($__internal_83f6683ca78af37105a27fb34eeba265e73197a10f284b0314c198ff17547481_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84d022129cb6e99f6125238a3bac26bd6fe5c8d9569069b671dc0f603c5c4ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d022129cb6e99f6125238a3bac26bd6fe5c8d9569069b671dc0f603c5c4ac7->enter($__internal_84d022129cb6e99f6125238a3bac26bd6fe5c8d9569069b671dc0f603c5c4ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c7f906678dfd6e660f7cec5b719d0420e88e45da1d8ca026e35158bd1344cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7f906678dfd6e660f7cec5b719d0420e88e45da1d8ca026e35158bd1344cd0->enter($__internal_6c7f906678dfd6e660f7cec5b719d0420e88e45da1d8ca026e35158bd1344cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6c7f906678dfd6e660f7cec5b719d0420e88e45da1d8ca026e35158bd1344cd0->leave($__internal_6c7f906678dfd6e660f7cec5b719d0420e88e45da1d8ca026e35158bd1344cd0_prof);

        
        $__internal_84d022129cb6e99f6125238a3bac26bd6fe5c8d9569069b671dc0f603c5c4ac7->leave($__internal_84d022129cb6e99f6125238a3bac26bd6fe5c8d9569069b671dc0f603c5c4ac7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4626b1abc6ddde3d8dc4a6ff9539a7442de7abae56bd5677652477e07c23427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4626b1abc6ddde3d8dc4a6ff9539a7442de7abae56bd5677652477e07c23427->enter($__internal_c4626b1abc6ddde3d8dc4a6ff9539a7442de7abae56bd5677652477e07c23427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73f2855148469adc718c7c10d31b5abe006226e0e0fb9f68a93ebaa142a87f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f2855148469adc718c7c10d31b5abe006226e0e0fb9f68a93ebaa142a87f5c->enter($__internal_73f2855148469adc718c7c10d31b5abe006226e0e0fb9f68a93ebaa142a87f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_73f2855148469adc718c7c10d31b5abe006226e0e0fb9f68a93ebaa142a87f5c->leave($__internal_73f2855148469adc718c7c10d31b5abe006226e0e0fb9f68a93ebaa142a87f5c_prof);

        
        $__internal_c4626b1abc6ddde3d8dc4a6ff9539a7442de7abae56bd5677652477e07c23427->leave($__internal_c4626b1abc6ddde3d8dc4a6ff9539a7442de7abae56bd5677652477e07c23427_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\Blog\\aglimpseofhappiness\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
