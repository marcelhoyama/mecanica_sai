
              <?php ob_start();?>

<h1>teste de relatorio</h1>

<?php $html= ob_get_contents();
 ob_end_clean();
 
 $mpdf=new \Mpdf\Mpdf();
 $mpdf->WriteHTML($html);
 $mpdf->Output();
 ?>
   