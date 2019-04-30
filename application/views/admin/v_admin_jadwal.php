<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>SI KP PWK</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css" integrity="sha384-QokYePQSOwpBDuhlHOsX0ymF6R/vLk/UQVz3WHa6wygxI5oGTmDTv8wahFOSspdm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
        
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.tabledit.js');?>"></script>

    </head>
    <body>
        <!--LOAD HEADER-->
        <?php $this->load->view('_header_admin');?>

        <!-- <title-page>Jadwal Seminar Kerja Praktik</title-page> -->
        <div class="title-page text-center">
            <h1>Jadwal Seminar Kerja Praktik</h1>    
        </div>
        

        <!--Search Bar-->
        <div class="searchbar text-center">
                <input class="search" type="text" placeholder="Search...">
        </div>
        
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="table-responsive">
                    <table id="myTable" class="table">
                        <thead class="thead">
                            <tr>
                                <th>id</th>
                                <th>Waktu</th>
                                <th>Ruangan</th>
                                <th>Keahlian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($query->result() as $row) {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $row->id_seminar;
                                        echo "</td>";
                                        echo "<td>";
                                            echo date("l, d-m-y h:i", strtotime($row->tanggal));
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->ruang;
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row->keahlian;
                                        echo "</td>";
                                    echo "</tr>";
                                }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
        

        <!--FOOTER-->
        <?php $this->load->view('_footer');?>
        <script>
            function showDiv() {
                document.getElementById('SaveBtn').style.display = "block";
            }
        </script>   

        <!-- Tabledit -->
        <script>
        $(document).ready(function() {
             $('#myTable').Tabledit({
              url:'<?php echo base_url('admin/c_admin_jadwal/tabledit');?>',
              editmethod: 'post',
              deletemethod: 'post',
              columns:{
               identifier:[0, "id"],
               editable:[[1,'Waktu'],[2, 'Ruangan'], [3, 'Keahlian']]
              },
              hideIdentifier: false,
              editButton: true,
              saveButton: true,
              restoreButton: false,
              successClass: 'success',
              inputClass: 'form-control input-sm',
              groupClass: 'btn-group btn-group-sm',
              eventType: 'click',
              rowIdentifier: 'id',
              buttons: {
                edit: {
                    class: 'btn btn-sm btn-default',
                    html: '<span class="fas fa-pencil-alt"></span>',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-default',
                    html: '<span class="fas fa-trash-alt"></span>',
                    action: 'delete'
                },
                save: {
                    class: 'btn btn-sm btn-success',
                    html: 'Save'
                },
                confirm: {
                    class: 'btn btn-sm btn-danger',
                    html: 'Confirm'
                }
            },
            
                onDraw: function() {
                    console.log('onDraw()');
                },
                onSuccess: function(data, textStatus, jqXHR) {
                    console.log('onSuccess(data, textStatus, jqXHR)');
                    console.log(data);
                    console.log(textStatus);
                    console.log(jqXHR);
                },
                onFail: function(jqXHR, textStatus, errorThrown) {
                    console.log('onFail(jqXHR, textStatus, errorThrown)');
                    console.log(jqXHR);
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                onAlways: function() {
                    console.log('onAlways()');
                },
                onAjax: function(action, serialize) {
                    console.log('onAjax(action, serialize)');
                    console.log(action);
                    console.log(serialize);
                }
            });
        });
        </script>
    </body>
</html>