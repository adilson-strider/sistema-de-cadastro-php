<?php

    // 
    include "db_conn.php";

    $sql = "SELECT * FROM convidados";
    
    $res = $conn->query($sql);

    if ($res->num_rows > 0){

        $html = "<h1>Lista de convidados</h1>";
        $html .= "<table style='border: 1px solid black; border-collapse: collapse'>";

        $html .= "<th style='border: 1px solid black; border-collapse: collapse'> id </th>";
        $html .= "<th style='border: 1px solid black; border-collapse: collapse'> nome </th>";
        $html .= "<th style='border: 1px solid black; border-collapse: collapse'> email </th>";
        $html .= "<th style='border: 1px solid black; border-collapse: collapse'> telefone </th>";
        $html .= "<th style='border: 1px solid black; border-collapse: collapse'> nº acompanhantes </th>";

        while($row = $res->fetch_object()){

            $html .= "<tr style='border: 1px solid black; '>";
            $html .= "<td style='border: 1px solid black; '>".$row->id."</td>";
            $html .= "<td style='border: 1px solid black; '>".$row->nome."</td>";
            $html .= "<td style='border: 1px solid black; '>".$row->email."</td>";
            $html .= "<td style='border: 1px solid black; '>".$row->telefone."</td>";
            $html .= "<td style='border: 1px solid black; '>".$row->numero_acompanhantes."</td>";
            $html .= "</tr>";
        }

        $html .= "</table>";

        // echo $html;
    }
    else {
        $html = "Nenhum dado registrado.";
    }

    use Dompdf\Dompdf;

    require_once 'dompdf/autoload.inc.php';

    $dompdf = new Dompdf();

    $dompdf->loadHtml($html);
    $dompdf->set_option("default", "sans");
    $dompdf->setPaper("A4", "portrait");
    $dompdf->render();
    $dompdf->stream();
?>