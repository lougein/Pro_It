<?php  


namespace MyApp\GrapheBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Ob\HighchartsBundle\Highcharts\Highchart; 
use Zend\Json\Expr;   
class GrapheController extends Controller{
    public function chartHistogrammeAction() { 
        $series = array(  
            array(        
                'name'  => 'Rainfall',  
                'type'  => 'column',    
                'color' => '#4572A7',   
                'yAxis' => 1,      
                'data'  => array(49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4),     ),  
            array(         'name'  => 'Temperature',  
                    'type'  => 'spline',  
                'color' => '#AA4643',     
                'data'  => array(7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6),     ), 
            ); 
        $yData = array(   
            array(      
                'labels' => array(    
                    'formatter' => new Expr('function () { return this.value + " degrees C" }'),             'style'     => array('color' => '#AA4643')         ),    
                'title' => array(             'text'  => 'Temperature',  
                        'style' => array('color' => '#AA4643')         ), 
                'opposite' => true,     ),  
            array(         'labels' => array(             'formatter' => new Expr('function () { return this.value + " mm" }'),        
                'style'     => array('color' => '#4572A7')         ),         'gridLineWidth' => 0,    
                'title' => array(             'text'  => 'Rainfall',        
                    'style' => array('color' => '#4572A7')     
                    ),   
                ), 
            ); 
        $categories = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');  
$ob = new Highchart();
$ob->chart->renderTo('container');
 $ob->chart->type('column'); 
 $ob->title->text('Average Monthly Weather Data for Tokyo'); 
 $ob->xAxis->categories($categories); $ob->yAxis($yData); $ob->legend->enabled(false); $formatter = new Expr('function () {                  var unit = {                      "Rainfall": "mm",                      "Temperature": "degrees C"                  }[this.series.name];                  return this.x + ": <b>" + this.y + "</b> " + unit;              }'); $ob->tooltip->formatter($formatter); $ob->series($series); return $this->render('MyAppGrapheBundle:Graphe:histogramme.html.twig', array(         'chart' => $ob     ));    
 
    } 
    public function PieAction(){

$ob = new Highchart();

$ob->chart->renderTo('piechart');

$ob->title->text('Nombre des utilisateurs ');

$ob->plotOptions->pie(array(

 'allowPointSelect' => true,

 'cursor' => 'pointer',

 'dataLabels' => array('enabled' => false),

 'showInLegend' => true

));
   $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT count(et.id)
                 FROM MyAppGrapheBundle:Administrateur et'
        );
        $Administrateur = $query->getSingleScalarResult();
        $et=(int)$Administrateur;

        $em1 = $this->getDoctrine()->getManager();
        $query1 = $em1->createQuery(
                'SELECT count(en.sexe)
                 FROM MyAppGrapheBundle:Client en'
        );
        $Client = $query1->getSingleScalarResult();
        $en =(int)$Client;
        


        $em3 = $this->getDoctrine()->getManager();
        $query3 = $em3->createQuery(
                'SELECT count(en2.nbreboutique)
                 FROM MyAppGrapheBundle:Mall en2'
        );
        $Mall = $query3->getSingleScalarResult();
        $en2 =(int)$Mall;
        
         $em4 = $this->getDoctrine()->getManager();
        $query4 = $em4->createQuery(
                'SELECT count(en3.nbreenseigne)
                 FROM MyAppGrapheBundle:Mall en3'
        );
        $mall = $query4->getSingleScalarResult();
        $en3 =(int)$mall;
        
        $data = array(
            array('Administrateur', $et),
            array('Client', $en),
           
            array('Mall', $en2),
             array('Mall', $en3),
             );
$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));

return $this->render('MyAppGrapheBundle:Graphe:pie.html.twig', array(

 'chart' => $ob

 ));
} 
    
    }

    
    
    
    
    
    
    
    
    
    