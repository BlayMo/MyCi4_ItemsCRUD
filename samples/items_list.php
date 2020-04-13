


<!DOCTYPE HTML>
<html>
   <head>
      <title>Items</title>
      <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
      <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
      <style>
         body{
         padding: 15px;
         }
      </style>
   </head>
   <body>
      <div class="row" style="margin-bottom: 10px">
         <div class="col-md-4">
            <h2 style="margin-top:0px">Items List</h2>
         </div>
         <div class="col-md-4 text-center">
            <div style="margin-top: 4px"  id="message">
               <?php echo $session->getFlashdata('message') <> '' ? $session->getFlashdata('message') : ''; ?>
            </div>
         </div>
         <div class="col-md-4 text-right">
            <?php echo anchor(site_url('items/create'), 'Create', 'class="btn btn-primary"'); ?>
         </div>
      </div>
      <div class="card shadow mb-4" style="margin-bottom: 50px" >
         <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Items  DataTables Example</h6>
         </div>
         <div class="card-body">
            <div class="table-responsive" >
               <table class="table table-bordered table-striped" id="mytable">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Iditem</th>
                        <th>Id Categoria</th>
                        <th>Item</th>
                        <th>Texto Item</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Deleted At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($items_data as $items){?>
                     <tr>
                        <td><?php echo $items->id_item?></td>
                        <td><?php echo $items->iditem ?></td>
                        <td><?php echo $items->id_categoria ?></td>
                        <td><?php echo $items->item ?></td>
                        <td><?php echo $items->texto_item ?></td>
                        <td><?php echo $items->created_at ?></td>
                        <td><?php echo $items->updated_at ?></td>
                        <td><?php echo $items->deleted_at ?></td>
                        <td style="text-align:center" >
                           <?php 
                              echo anchor(site_url('items/read/'.$items->id_item),'Read'); 
                              echo ' | '; 
                              echo anchor(site_url('items/update/'.$items->id_item),'Update'); 
                              echo ' | '; 
                              echo anchor(site_url('items/delete/'.$items->id_item),'Delete','onclick="javascript: return confirm(\'Are You Sure ?\')"'); 
                              ?>
                        </td>
                     </tr>
                     <?php }?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
      <script src="<?php echo site_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
      <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("#mytable").dataTable();
         });
      </script>
   </body>
</html>

