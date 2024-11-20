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
class __TwigTemplate_f50c4eaa938ff02f517dbad339d4f400 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agency/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agency/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
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
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/display.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <div class = \"header\">
        <h1>Agency</h1>
    </div>

       ";
        if ($this->env->isDebug()) {
            // line 10
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 10, $this->source); })()));
        }
        // line 11
        yield "    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name : </th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th> Location : </th>
                <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 23, $this->source); })()), "location", [], "any", false, false, false, 23), "html", null, true);
        yield "
            </tr>

        </tbody>
    </table>
    <div class = displayList>
        <ul>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 30, $this->source); })()), "starships", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["starship"]) {
            // line 31
            yield "            <li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["starship"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["starship"], "name", [], "any", false, false, false, 31), "html", null, true);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['starship'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "        </ul>
    </div>
    <br>
    <div class=\"myButton\">
        <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_member_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 37, $this->source); })()), "member", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\">back to member<br></a>
    </div>
    <br><br>
    <div class = myButton>
        <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        yield "\">Add new</a>
    </div>

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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  173 => 41,  166 => 37,  160 => 33,  149 => 31,  145 => 30,  135 => 23,  128 => 19,  121 => 15,  115 => 11,  112 => 10,  102 => 5,  89 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{# ... #}
{% block title %}<title>{{ agency.name }}</title>{% endblock %}
{% block body %}
<link href=\"{{ asset('styles/display.css') }}\" rel=\"stylesheet\">
    <div class = \"header\">
        <h1>Agency</h1>
    </div>

       {% dump agency %}
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ agency.id }}</td>
            </tr>
            <tr>
                <th>Name : </th>
                <td>{{ agency.name }}</td>
            </tr>
            <tr>
                <th> Location : </th>
                <td>{{ agency.location}}
            </tr>

        </tbody>
    </table>
    <div class = displayList>
        <ul>
            {% for starship in agency.starships %}
            <li><a href=\"{{ path('app_starship_show',{'id':starship.id})}}\">{{ starship.name }}</a></li>
            {% endfor %}
        </ul>
    </div>
    <br>
    <div class=\"myButton\">
        <a href=\"{{ path('app_member_show',{'id':agency.member.id}) }}\">back to member<br></a>
    </div>
    <br><br>
    <div class = myButton>
        <a href=\"{{ path('app_starship_new', {'id': agency.id}) }}\">Add new</a>
    </div>

{% endblock %} {# body #} 
{# ... #} ", "agency/show.html.twig", "/home/nathan-hubert/Desktop/CSC4101/project/MyRocketScience/templates/agency/show.html.twig");
    }
}
