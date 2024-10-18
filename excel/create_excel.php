<?php 
  require 'vendor/autoload.php';

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
  use PhpOffice\PhpSpreadsheet\Cell\Coordinate;


  //CONEXIÓN BASE DE DATOS

  $host = 'localhost';
  $db = '2daw';
  $user = 'mau';
  $password = getenv('DB_PASSWORD');




    $pdo = new pdo("mysql:host=$host;dbname=$db;charset=utf8",$user,$password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  


// CONSULTA PARA OBTENER DATOS

  $sql = "SELECT * FROM alumnos";
  $statement = $pdo->query($sql);
  $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//CREAR DOCUMENTO EXCELS
  $spreadsheet = new Spreadsheet();
  $sheet = $spreadsheet->getActiveSheet();
  $sheet->setTitle('Alumnos 2daw');
  $columnindex = 1;
  $rowindex = 1;

// headers = ['id', 'nombre', 'email'];
  
  if(!empty($rows)){

    $headers = array_keys($rows[0]);
    
    foreach ($headers as $header) {
      if($columnindex >=1){
        /* Convierte un índice columna en una letra y concatena con rowindex que es 1 por ejemplo, lo que devuelve A1 siendo esta la celda,
         y luego le mete un valor*/
        $sheet->setCellValue(Coordinate::stringFromColumnIndex($columnindex) . $rowindex, $header);
        $columnindex++;
      }
    }

    $rowindex++;

    foreach ($rows as $row) {
      $columnindex = 1;
      foreach ($row as $cell) {
        if($columnindex >= 1) {
          $sheet->setCellValue(Coordinate::stringFromColumnIndex($columnindex) . $rowindex, $cell);
          $columnindex++;
        }
      }
      $rowindex++;
    }
  }


  header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  header('Content-Disposition: attachment;filename="datos_tabla_alumnos.xlsx"');
  header('Cache-Control: max-age=0');

  $writer = new Xlsx($spreadsheet);
 $writer->save('php://output');
  exit;
