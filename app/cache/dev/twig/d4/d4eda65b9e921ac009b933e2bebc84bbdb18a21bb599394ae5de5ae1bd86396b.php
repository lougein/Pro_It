<?php

/* MyAppGrapheBundle:Graphe:pie.html.twig */
class __TwigTemplate_f8dc19dd25d2f2a6eed42a6ac5a2deb3d4cf842febd66593f7d4324e3543e6ef extends Twig_Template
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
        // line 1
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>  
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script> <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> <script type=\"text/javascript\">     ";
        // line 2
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>  
<div id=\"piechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 3
        echo " ";
    }

    public function getTemplateName()
    {
        return "MyAppGrapheBundle:Graphe:pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script> <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script> <script type="text/javascript">     {{ chart(chart) }} </script>  */
/* <div id="piechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>{# empty Twig template #} */
