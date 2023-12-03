<?php
namespace App\Helpers;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfHelper
{
    public static function generatePdf($html, $filename)
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $output = $dompdf->output();
        file_put_contents($filename, $output);
    }
}
