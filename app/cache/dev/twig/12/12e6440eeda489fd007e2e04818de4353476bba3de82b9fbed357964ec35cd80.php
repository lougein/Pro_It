<?php

/* MyAppGrapheBundle:Graphe:histogramme.html.twig */
class __TwigTemplate_79115b3b63a95c21b712740dfdf8c70c083bab58797b4a99244181388b1d8227 extends Twig_Template
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
        // line 2
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" 
type=\"text/javascript\"></script>  
<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script> 
<script type=\"text/javascript\">     ";
        // line 6
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo " </script>  
<div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 7
        echo " ";
    }

    public function getTemplateName()
    {
        return "MyAppGrapheBundle:Graphe:histogramme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  25 => 6,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" */
/* type="text/javascript"></script>  */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script> */
/* <script type="text/javascript">     {{ chart(chart) }} </script>  */
/* <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>{# empty Twig template #} */
