<?php require 'vendor/autoload.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
        <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
    </head>
    <body>
    <?php
        $report = new \Dalek\DataTableComponent(['labels'=> ['id', 'name']], [1, 'Mohammed Matar']);
        $builder = $report->getBuilder();
        $report->setDimension(22, 89);
        var_dump( $builder->getObjectAsJson());
//        var_dump($builder->getObject());
//        $builder->setHeaders(['name', 'age', 'weight']);
//        var_dump($builder->getObject());
//        $builder->setData([['Mohammed Matar', 27, 155], ['Amgad Khalid', 22, 193]]);
//        var_dump('=================================================================');
//        var_dump($builder->getObject());
    ?>
    <div class="xx">
        <table id="example" class="display" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Empid</th>
                    <th>Name</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Empid</th>
                    <th>Name</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        $( document ).ready(function() {
            
        $('#example').dataTable();
        });
    </script>
    </body>
</html>