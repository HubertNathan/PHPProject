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

/* starship/show.html.twig */
class __TwigTemplate_245f7e7863dd8b494cc92562869c3ebb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "starship/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "starship/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "starship/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
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
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>

       ";
        if ($this->env->isDebug()) {
            // line 7
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 7, $this->source); })()));
        }
        // line 8
        yield "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Agency : </th>
                <td><a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agency_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 21, $this->source); })()), "agency", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 21, $this->source); })()), "agency", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</a></td>
            </tr>
            <tr>
                <th> Edit : </th>
                <td><a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 25, $this->source); })()), "agency", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\"> EDIT </a></td>
            </tr>

        </tbody>
    </table>
    <h1>Image</h1>
    <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 31, $this->source); })()), "imageFile"), "html", null, true);
        yield "\"/>

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
        return "starship/show.html.twig";
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
        return array (  151 => 31,  142 => 25,  133 => 21,  126 => 17,  119 => 13,  112 => 8,  109 => 7,  102 => 5,  89 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}<title>{{ starship.name }}</title>{% endblock %}

{% block body %}
    <h1>{{starship.name}}</h1>

       {% dump starship %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ starship.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ starship.name }}</td>
            </tr>
            <tr>
                <th>Agency : </th>
                <td><a href=\"{{ path('app_agency_show',{'id':starship.agency.id})}}\">{{ starship.agency.name }}</a></td>
            </tr>
            <tr>
                <th> Edit : </th>
                <td><a href=\"{{ path('app_starship_edit',{'id':starship.agency.id})}}\"> EDIT </a></td>
            </tr>

        </tbody>
    </table>
    <h1>Image</h1>
    <img src=\"{{ vich_uploader_asset(starship, 'imageFile') }}\"/>

{% endblock %} {# body #} 
{# ... #} 
", "starship/show.html.twig", "/home/nathan-hubert/Desktop/CSC4101/project/MyRocketScience/templates/starship/show.html.twig");
    }
}
