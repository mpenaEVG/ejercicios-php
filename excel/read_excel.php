<?php
require 'vendor/autoload.php'; // Asegúrate de que este path sea correcto

use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['excel_file'])) {
    $file = $_FILES['excel_file']['tmp_name'];

    // Cargar el archivo Excel
    $spreadsheet = IOFactory::load($file);
    $sheet = $spreadsheet->getActiveSheet();

    // Leer los datos de la hoja
    $data = [];
    foreach ($sheet->getRowIterator() as $row) {
        $rowData = [];
        foreach ($row->getCellIterator() as $cell) {
            $rowData[] = $cell->getValue(); // Obtener el valor de cada celda
        }
        $data[] = $rowData; // Agregar la fila a los datos
    }

    // Mostrar los datos
    echo "<pre>";
    foreach ($data as $numero => $array) {
      foreach ($array as $nombre) {
          echo '<h2>Alumno numero '. $numero .' de nombre '. $nombre .'</h2>';
        }
    }
    echo "</pre>";
}
  
