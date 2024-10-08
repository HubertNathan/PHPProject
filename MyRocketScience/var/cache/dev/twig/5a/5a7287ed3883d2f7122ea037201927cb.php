<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* agency/show.html.twig */
class __TwigTemplate_1b317dcdb67b255e38dd5d6ebd0e197a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/show.html.twig"));

        // line 2
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 3
        yield "
";
        // line 4
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 32
        yield " ";
        yield " 
";
        // line 33
        yield " ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "<title>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        yield "</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <h1>Agency</h1>

       ";
        if ($this->env->isDebug()) {
            // line 7
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 7, $this->source); })()));
        }
        // line 8
        yield "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name : </th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th> Location : </th>
                <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 21, $this->source); })()), "location", [], "any", false, false, false, 21), "html", null, true);
        yield "
            </tr>

        </tbody>
    </table>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["Agency"]) || array_key_exists("Agency", $context) ? $context["Agency"] : (function () { throw new RuntimeError('Variable "Agency" does not exist.', 26, $this->source); })()), "starships", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["starship"]) {
            // line 27
            yield "    <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["starship"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "  </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['starship'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("agency_index");
        yield "\">back to list</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "agency/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  163 => 30,  160 => 29,  151 => 27,  147 => 26,  139 => 21,  132 => 17,  125 => 13,  118 => 8,  115 => 7,  110 => 5,  97 => 4,  72 => 2,  61 => 33,  57 => 32,  55 => 4,  52 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# ... #}
{% block title %}<title>{{ Agency.name }}</title>{% endblock %}

{% block body %}
    <h1>Agency</h1>

       {% dump Agency %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ Agency.id }}</td>
            </tr>
            <tr>
                <th>Name : </th>
                <td>{{ Agency.name }}</td>
            </tr>
            <tr>
                <th> Location : </th>
                <td>{{ Agency.location}}
            </tr>

        </tbody>
    </table>
    {% for starship in Agency.starships %}
    <li>{{starship.name}}  </li>
    {% endfor %}

    <a href=\"{{ path('agency_index') }}\">back to list</a>

{% endblock %} {# body #} 
{# ... #} ", "agency/show.html.twig", "C:\\Users\\natha\\Desktop\\ProjetPHP\\PHPProject\\MyRocketScience\\templates\\agency\\show.html.twig");
    }
}
