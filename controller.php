use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;


public function downloadImage($id)
{
    $priceData = ProductPrice::where('price_date', $id)->get();
    $pdf = Pdf::loadView('images', compact('priceData'));
    $dompdf = $pdf->getDompdf();
    $options = new Options(['isHtml5ParserEnabled' => true, 'isPhpEnabled' => true]);
    $dompdf->setOptions($options, true);
    return $pdf->download('test.pdf');
}
