<?php

/* MyAppGrapheBundle:Panier:livraison.html.twig */
class __TwigTemplate_ffb62a9da09b2a5b6aaf469dc1e18b1aa72dacca954ed62d6cd8c6ff31effee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "        

";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        ";
        // line 11
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 12
            echo "                        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" method=\"POST\">
                            
                            <h4>Adresse de livraison</h4>
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 16
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"livraison\" value=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                            
                            <br /><br />
                            
                            <h4>Adresse de facturation</h4>
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 27
                echo "                            <label class=\"radio\">
                                <input type=\"radio\" name=\"facturation\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "pays", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                <br />";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo "
                            </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                            
                            <br />
                            
                            <button class=\"btn btn-primary\">Valider mes adresses</button>
                        </form>
                        ";
        }
        // line 39
        echo "                    </div>


                    <div class=\"span4 offset2\">
                        <h4>Ajouter une nouvelle adresse</h4>
                        <form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" method=\"POST\">
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAppGrapheBundle:Panier:livraison.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 45,  187 => 44,  180 => 39,  172 => 33,  153 => 30,  141 => 29,  133 => 28,  130 => 27,  113 => 26,  107 => 22,  88 => 19,  76 => 18,  68 => 17,  65 => 16,  48 => 15,  41 => 12,  39 => 11,  30 => 4,  24 => 3,  20 => 1,);
    }
}
/*         */
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Livraison</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         {% if utilisateur.adresses|length != 0 %}*/
/*                         <form action="{{ path('validation') }}" method="POST">*/
/*                             */
/*                             <h4>Adresse de livraison</h4>*/
/*                             {% for adresse in utilisateur.adresses %}*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="livraison" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                 {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}"><i class="icon-trash"></i></a>*/
/*                                 <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/*                             </label>*/
/*                             {% endfor %}*/
/*                             */
/*                             <br /><br />*/
/*                             */
/*                             <h4>Adresse de facturation</h4>*/
/*                             {% for adresse in utilisateur.adresses %}*/
/*                             <label class="radio">*/
/*                                 <input type="radio" name="facturation" value="{{ adresse.id }}" {% if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                 {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} - {{ adresse.pays }} <a href="{{ path('livraisonAdresseSuppression', { 'id' : adresse.id }) }}"><i class="icon-trash"></i></a>*/
/*                                 <br />{{ adresse.prenom }} {{ adresse.nom }}*/
/*                             </label>*/
/*                             {% endfor %}*/
/*                             */
/*                             <br />*/
/*                             */
/*                             <button class="btn btn-primary">Valider mes adresses</button>*/
/*                         </form>*/
/*                         {% endif %}*/
/*                     </div>*/
/* */
/* */
/*                     <div class="span4 offset2">*/
/*                         <h4>Ajouter une nouvelle adresse</h4>*/
/*                         <form action="{{ path('livraison') }}" method="POST">*/
/*                             {{ form_widget(form) }}*/
/*                             <button class="btn btn-primary" type="submit">Ajouter</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
