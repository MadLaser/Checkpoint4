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

        echo "Liste des voitures
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Liste des voitures
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t<div class=\"row no-gutters align-items-center text-center\">
\t\t<div class=\"col\">
\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "minAnnee", [], "any", false, false, false, 17), 'row');
        echo "
\t\t</div>
\t\t<div class=\"col\">
\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "maxAnnee", [], "any", false, false, false, 20), 'row');
        echo "
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary\">
\t\t</div>
\t</div>

\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
\t\t<a href=";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creationVoiture");
        echo " class=\"d-block btn-success text-center\">Ajouter</a>
\t<div class=\"row no-gutters\">
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voiture"]) {
            // line 31
            echo "\t\t\t<div class=\"col-12 col-lg-6 p-1\">
\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<div class=\"row no-gutters align-items-center p-2\">
\t\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t\t<img src=";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 35), "image", [], "any", false, false, false, 35))), "html", null, true);
            echo " class=\"card-img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "immatriculation", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<div>Marque :
\t\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 42), "marque", [], "any", false, false, false, 42), "libelle", [], "any", false, false, false, 42), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>Modèle :
\t\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 44), "libelle", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t- Prix moyen :
\t\t\t\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["voiture"], "modele", [], "any", false, false, false, 46), "prixMoyen", [], "any", false, false, false, 46), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>Nombre de portes :
\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "nbPortes", [], "any", false, false, false, 48), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t<div>Année :
\t\t\t\t\t\t\t\t\t\t";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voiture"], "annee", [], "any", false, false, false, 50), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 55
            if ((isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t<a href=";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo " class=\"col btn-warning text-center\">Modifier</a>
\t\t\t\t\t\t\t<form method=\"post\" class=\"col\" action=";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo " onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?')\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"SUP\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["voiture"], "id", [], "any", false, false, false, 60))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger w-100\" value=\"supprimer\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voiture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t</div>
\t<div class=\"navigation\">
\t\t";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voitures"]) || array_key_exists("voitures", $context) ? $context["voitures"] : (function () { throw new RuntimeError('Variable "voitures" does not exist.', 70, $this->source); })()));
        echo "
\t</div>


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
        return array (  246 => 70,  242 => 68,  234 => 65,  226 => 60,  221 => 58,  217 => 57,  214 => 56,  212 => 55,  204 => 50,  199 => 48,  194 => 46,  189 => 44,  184 => 42,  178 => 39,  171 => 35,  165 => 31,  161 => 30,  156 => 28,  152 => 27,  142 => 20,  136 => 17,  130 => 14,  127 => 13,  118 => 10,  115 => 9,  110 => 8,  100 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des voitures
{% endblock %}
{% block monTitre %}Liste des voitures
{% endblock %}
{% block body %}
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{message}}
\t\t</div>
\t{% endfor %}

\t{{form_start(form)}}
\t<div class=\"row no-gutters align-items-center text-center\">
\t\t<div class=\"col\">
\t\t\t{{form_row(form.minAnnee)}}
\t\t</div>
\t\t<div class=\"col\">
\t\t\t{{form_row(form.maxAnnee)}}
\t\t</div>
\t\t<div class=\"col-2\">
\t\t\t<input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary\">
\t\t</div>
\t</div>

\t{{form_end(form)}}
\t\t<a href={{ path('creationVoiture') }} class=\"d-block btn-success text-center\">Ajouter</a>
\t<div class=\"row no-gutters\">
\t\t{% for voiture in voitures %}
\t\t\t<div class=\"col-12 col-lg-6 p-1\">
\t\t\t\t<div class=\"card mb-3\">
\t\t\t\t\t<div class=\"row no-gutters align-items-center p-2\">
\t\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t\t<img src={{ asset('images/' ~ voiture.modele.image)}} class=\"card-img\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{voiture.immatriculation}}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t<div>Marque :
\t\t\t\t\t\t\t\t\t\t{{voiture.modele.marque.libelle}}</div>
\t\t\t\t\t\t\t\t\t<div>Modèle :
\t\t\t\t\t\t\t\t\t\t{{voiture.modele.libelle}}
\t\t\t\t\t\t\t\t\t\t- Prix moyen :
\t\t\t\t\t\t\t\t\t\t{{voiture.modele.prixMoyen}}</div>
\t\t\t\t\t\t\t\t\t<div>Nombre de portes :
\t\t\t\t\t\t\t\t\t\t{{voiture.nbPortes}}</div>
\t\t\t\t\t\t\t\t\t<div>Année :
\t\t\t\t\t\t\t\t\t\t{{voiture.annee}}</div>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if admin %}
\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t<a href={{ path('modifVoiture', {'id' : voiture.id} ) }} class=\"col btn-warning text-center\">Modifier</a>
\t\t\t\t\t\t\t<form method=\"post\" class=\"col\" action={{ path('supVoiture',{'id' : voiture.id} )}} onsubmit=\"return confirm('Voulez-vous vraiment supprimer ?')\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"SUP\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ voiture.id)}}\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger w-100\" value=\"supprimer\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<div class=\"navigation\">
\t\t{{ knp_pagination_render(voitures) }}
\t</div>


{% endblock %}
", "voiture/voitures.html.twig", "/home/wilder/Checkpoint4/templates/voiture/voitures.html.twig");
    }
}
