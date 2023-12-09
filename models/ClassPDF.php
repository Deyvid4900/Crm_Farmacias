<?php

namespace Models;

require_once('../lib/vendor/tecnickcom/tcpdf/tcpdf.php');

use TCPDF;


class PDFCriar
{
    public function CriarPDF($arrayItens)
    {
        // $arrayItens = array_filter($arrayItens, function ($value) {
        //     return $value !== "" && $value !== '' && $value !== null ;
        // });

        // Crie uma instância do TCPDF
        $pdf = new TCPDF();
        $html=null;
        $pdf->AddPage();
       foreach ($arrayItens as $key => $value) {
        $html .= $key." : ".$value.";\n" ;
       }
        
        
       $pdf->MultiCell(0, 10, $html);
    //    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdfContent = $pdf->Output('testePdf', 'S');  // Obtenha o conteúdo do PDF como uma string

        // Enviar o conteúdo do PDF como parte da resposta
        $response = array(
            'status' => 'success',
            'message' => 'Ação válida imprimir',
            'pdfContent' => base64_encode($pdfContent),  // Codifique o conteúdo como base64 para transferência via AJAX
        );
        return $response;
    }
}
