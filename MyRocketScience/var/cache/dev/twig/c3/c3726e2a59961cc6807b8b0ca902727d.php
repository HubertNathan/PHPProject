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

    // line 6
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

        // line 7
        yield "    <h1>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

       ";
        if ($this->env->isDebug()) {
            // line 9
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 9, $this->source); })()));
        }
        // line 10
        yield "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Agency : </th>
                <td><a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agency_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 23, $this->source); })()), "agency", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 23, $this->source); })()), "agency", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</a></td>
            </tr>
            <tr>
                <th> Edit : </th>
                <td><a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_starship_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 27, $this->source); })()), "agency", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"> EDIT </a></td>
            </tr>

        </tbody>
    </table>
    <p>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
    ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 33, $this->source); })()), "imageName", [], "any", false, false, false, 33)) {
            // line 34
            yield "        <h1>Image</h1>
        <img src=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["starship"]) || array_key_exists("starship", $context) ? $context["starship"] : (function () { throw new RuntimeError('Variable "starship" does not exist.', 35, $this->source); })()), "imageFile"), "html", null, true);
            yield "\"/>
    ";
        }
        // line 37
        yield "
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
        return array (  164 => 37,  159 => 35,  156 => 34,  154 => 33,  150 => 32,  142 => 27,  133 => 23,  126 => 19,  119 => 15,  112 => 10,  109 => 9,  102 => 7,  89 => 6,  64 => 2,  41 => 1,);
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
    <p>{{ starship.description }}</p>
    {% if starship.imageName %}
        <h1>Image</h1>
        <img src=\"{{ vich_uploader_asset(starship, 'imageFile') }}\"/>
    {% endif %}

{% endblock %} {# body #} 
{# ... #} 
", "starship/show.html.twig", "/home/nathan-hubert/Desktop/CSC4101/project/MyRocketScience/templates/starship/show.html.twig");
    }
}
