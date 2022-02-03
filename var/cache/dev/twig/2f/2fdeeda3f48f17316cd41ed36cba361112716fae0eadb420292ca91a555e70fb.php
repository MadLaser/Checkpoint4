<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* voiture/voitures.html.twig */
class __TwigTemplate_8aed1a8d32f38cf406752d790e003bfc74d374c9fe9bf3fec70adebc2d85e859 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/voitures.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/voitures.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voiture/voitures.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des voitures";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Liste des voitures";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
<div class=\"row no-gutters align-items-center text-center\">
    <div class=\"col\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "minAnnee", [], "any", false, false, false, 15), 'row');
        echo "
    </div>
    <div class=\"col\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "maxAnnee", [], "any", false, false, false, 18), 'row');
        echo "
    </div>
    <div class=\"col-2\">
        <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary\">
    </div>
</div>

";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
";
        // line 26
        if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "<a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creationVoiture");
            echo " class=\"d-block btn-success text-center\">Ajouter</a>
";
        }
        // line 29
        echo "
<div class=\"row no-gutters\">
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 32
            echo "        <div class=\"col-12 col-lg-6 p-1\">
            <div class=\"card mb-3\">
                <div class=\"row no-gutters align-items-center p-2\">
                    <div class=\"col-12 col-md-4\">
                        <img src=";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 36), "image", [], "any", false, false, false, 36))), "html", null, true);
            echo " class=\"card-img\" >
                    </div>
                    <div class=\"col\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "immatriculation", [], "any", false, false, false, 40), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">
                                <div>Marque : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 42), "marque", [], "any", false, false, false, 42), "libelle", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
                                <div>Modèle : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 43), "libelle", [], "any", false, false, false, 43), "html", null, true);
            echo " - Prix moyen : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 43), "prixMoyen", [], "any", false, false, false, 43), "html", null, true);
            echo "</div>
                                <div>Nombre de portes : ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "nbPortes", [], "any", false, false, false, 44), "html", null, true);
            echo "</div>
                                <div>Année : ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "annee", [], "any", false, false, false, 45), "html", null, true);
            echo "</div>
                            </p>
                        </div>
                    </div>
                </div>
                 ";
            // line 50
            if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 50, $this->source); })())) {
                // line 51
                echo "            <div class=\"row no-gutters\">
                <a href=";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo " class=\"col btn-warning text-center\">Modifier</a>
                <form method=\"post\" class=\"col\" action=";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo " onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?')\">
                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 55))), "html", null, true);
                echo "\">
                    <input type=\"submit\" class= \"btn btn-danger w-100\" value=\"supprimer\">
                </form>
            </div>
        ";
            }
            // line 60
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </div> 
    <div class=\"navigation\">
    ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 65, $this->source); })()));
        echo "
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "voiture/voitures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 65,  239 => 63,  231 => 60,  223 => 55,  218 => 53,  214 => 52,  211 => 51,  209 => 50,  201 => 45,  197 => 44,  191 => 43,  187 => 42,  182 => 40,  175 => 36,  169 => 32,  165 => 31,  161 => 29,  155 => 27,  153 => 26,  149 => 25,  139 => 18,  133 => 15,  127 => 12,  124 => 11,  115 => 8,  112 => 7,  108 => 6,  98 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des voitures{% endblock %}
{% block monTitre %}Liste des voitures{% endblock %}
{% block body %}
{% for message in app.flashes('success') %}
    <div class=\"alert alert-success\">
        {{message}}
    </div>
{% endfor %}

{{form_start(form)}}
<div class=\"row no-gutters align-items-center text-center\">
    <div class=\"col\">
        {{form_row(form.minAnnee)}}
    </div>
    <div class=\"col\">
        {{form_row(form.maxAnnee)}}
    </div>
    <div class=\"col-2\">
        <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary\">
    </div>
</div>

{{form_end(form)}}
{% if admin %}
<a href={{ path('creationVoiture') }} class=\"d-block btn-success text-center\">Ajouter</a>
{% endif %}

<div class=\"row no-gutters\">
    {% for voiture in voitures %}
        <div class=\"col-12 col-lg-6 p-1\">
            <div class=\"card mb-3\">
                <div class=\"row no-gutters align-items-center p-2\">
                    <div class=\"col-12 col-md-4\">
                        <img src={{ asset('images/' ~ voiture.modele.image)}} class=\"card-img\" >
                    </div>
                    <div class=\"col\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{voiture.immatriculation}}</h5>
                            <p class=\"card-text\">
                                <div>Marque : {{voiture.modele.marque.libelle}}</div>
                                <div>Modèle : {{voiture.modele.libelle}} - Prix moyen : {{voiture.modele.prixMoyen}}</div>
                                <div>Nombre de portes : {{voiture.nbPortes}}</div>
                                <div>Année : {{voiture.annee}}</div>
                            </p>
                        </div>
                    </div>
                </div>
                 {% if admin %}
            <div class=\"row no-gutters\">
                <a href={{ path('modifVoiture', {'id' : voiture.id}) }} class=\"col btn-warning text-center\">Modifier</a>
                <form method=\"post\" class=\"col\" action={{ path('supVoiture',{'id' : voiture.id})}} onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?')\">
                    <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ voiture.id)}}\">
                    <input type=\"submit\" class= \"btn btn-danger w-100\" value=\"supprimer\">
                </form>
            </div>
        {% endif %}
            </div>
        </div>
    {% endfor %}
    </div> 
    <div class=\"navigation\">
    {{ knp_pagination_render(voitures) }}
</div>


{% endblock %}
", "voiture/voitures.html.twig", "/home/wilder/Checkpoint4/templates/voiture/voitures.html.twig");
    }
}
