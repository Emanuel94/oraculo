<?php
// Add FIle
// include common file
 $this->load->view('admin/include/common.php'); 
// include header file
  $this->load->view('admin/include/header.php'); 
// include sidebar file  
   $this->load->view('admin/include/sidebar.php');





   
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Compañia
        <small>Panel de Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Compañia</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
            
                <?php if($this->session->flashdata('msg') != false){ ?>
                 <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>  <i class="icon fa fa-check"></i> Alerta!</h4>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php } ?>
                <?php if(validation_errors() != false){ ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                      <?php echo validation_errors(); ?>
                  </div>
                <?php } ?>
              <?php 
                $attributes = array('id' => 'frm','name'=>'frm');
                  echo form_open_multipart('company/update/1',$attributes); ?>
              
                <div class="box box-primary">
                  <div class="col-md-6" style="background: #ffffff;">
                
                          <div class='box-body pad'>
                                    <div class="form-group">
                                        <label>Nombre :</label>
                                        <input type="text" name="txtemisor_nombre" class="form-control " placeholder="Ingrese el nombre de la compañia..." value="<?php echo htmlspecialchars($objcompany['emisor_nombre']); ?>" />
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Tipo de Identificación :</label>
                                        <select name="emisor_tipo_indetif">
                                          <option value="01">Fisico</option>
                                          <option value="02">Juridico</option>                                          
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Número de Identificación:</label>
                                        <input type="number" name="txtemisor_num_identif" class="form-control " placeholder="Ingrese el número de identificación" value="<?php echo htmlspecialchars($objcompany['emisor_num_identif']); ?>" />
                                    </div>                                      
                                    <div class="form-group">
                                        <label>Codigo País tel:</label>
                                        <input type="number" name="txtemisor_cod_pais_tel" class="form-control " placeholder="Ingrese Codigo de pais..." value="<?php echo htmlspecialchars($objcompany['emisor_cod_pais_tel']); ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                      <label>Número de telefono. :</label><br />
                                      <input type="text" class="form-control" name="txtemisor_tel" value="<?php echo htmlspecialchars($objcompany['emisor_tel']); ?>" placeholder="Ingrese numero de telefono" />
                                    </div>
                                     <div class="form-group">
                                        <label>Codigo País fax:</label>
                                        <input type="number" name="txtemisor_cod_pais_fax" class="form-control " placeholder="Ingrese Codigo de Fax..." value="<?php echo htmlspecialchars($objcompany['emisor_cod_pais_fax']); ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                      <label>Número de fax. :</label><br />
                                      <input type="text" class="form-control" name="txtemisor_fax" value="<?php echo htmlspecialchars($objcompany['emisor_fax']); ?>" placeholder="Ingrese número de fax" />
                                    </div>
                  
                            </div>
                    </div>
                            
              <div class="col-md-6" style="background: #ffffff;">
                <div class='box-body pad'>
                    <div class="form-group">
                      <label>Nombre Comercial :</label>
                      <input type="text" name="txtnombre_comercial" class="form-control " placeholder="Ingrese el nombre Comercial" value="<?php echo htmlspecialchars($objcompany['nombre_comercial']); ?>" />
                    </div>

                  <div class="form-group">
                    <label>Email :</label>
                    <input type="email" class="form-control" name="txtemisor_email" placeholder="Ingrese el Email" value="<?php echo htmlspecialchars($objcompany['emisor_email']); ?>" />
                  </div>
                
                  <div class="form-group">

                
                    <label>Provincia:</label>
                        <select id="cbx_provincia" name="cbx_provincia" >
                            <?php 

                            $CI =& get_instance();

                            $provincia = $CI->get_all_provincia();
                            foreach ($provincia as $value) {
                                ?>
                                <option value="<?php echo $value->idProvincia; ?>"><?php echo $value->nombreProvincia; ?></option>
                                <?php
                            }
                         ?>                            
                                             
                        </select>
                  
                                   
                      <label>Cantón :</label>
                        <select id="cbx_canton" name="cbx_canton" >
                              <?php 

                            $CI =& get_instance();

                            $canton = $CI->get_all_canton();
                            foreach ($canton as $value) {
                                ?>
                                <option value="<?php echo $value->idCanton; ?>"><?php echo $value->nombreCanton; ?></option>
                                <?php
                            }
                         ?>   

                        </select>
                    
                      <label>Distrito :</label>
                       <select id="cbx_distrito" name="cbx_distrito" >
                         <?php 

                            $CI =& get_instance();

                            $distrito = $CI->get_all_distrito();
                            foreach ($distrito as $value) {
                                ?>
                                <option value="<?php echo $value->idDistrito; ?>"><?php echo $value->nombreDistrito; ?></option>
                                <?php
                            }
                         ?> 
                       

                      </select>

                      <label>Barrio :</label>
                       <select id="cbx_barrio" name="cbx_barrio" >
                             <?php 

                            $CI =& get_instance();

                            $barrio = $CI->get_all_barrio();
                            foreach ($barrio as $value) {
                                ?>
                                <option value="<?php echo $value->idBarrio; ?>"><?php echo $value->nombreBarrio; ?></option>
                                <?php
                            }
                         ?> 
                       

                      </select>


                   
                   
                  </div>
                 
                   <div class="form-group">
                     <label>Otras Señas :</label>
                     <input type="text" class="form-control" name="txtsennas" value="<?php echo htmlspecialchars($objcompany['emisor_otras_senas']); ?>" />                    
                  </div>
                  
                                    
                  <div class="col-md-8">  
                      <div class="form-group">
                          <label>Logo:</label><br />
                          <input type="file"  name="fl_clogo" />
                          <br />
                          <?php
                           $image = 'file/company/'.$objcompany['company_image'];
                           if (file_exists($image)) {
                                   echo '<input type="checkbox" name="chkdelete_logo" value="yes"  /> <label> Eliminar Logo</label><br />';
                                   ?>
                                   <input type="checkbox" <?php if($objcompany['recipe_print'] == 'yes') echo 'checked="checked"'; ?>   name="chkprint_logo" value="yes"  /> <label> Imprimir logo en la Factura</label>
                                  <?php
                               }
                          ?>
                      </div>
                  </div>
                
                  <?php 
                                        if ( file_exists($image) ) {
                                            echo '<div class="col-md-4"><img src="'.base_url().$image.'" width="150" height="150" alt="Logo Compañia" /></div>';
                                        }
                                    ?>
                  
                                    
                  </div>
              </div>
            </div><!-- /.box -->
        </div><!-- /.col-->
      </div>

      <br />
      
      <div class="row">  
        <div class='col-md-12'>
                    <div class='box box-danger' >
                        <div class='box-header'>
                            <h3 class='box-title'><i class="fa fa-money" aria-hidden="true"></i>
Impuestos & Monedas</h3>
                        </div><!-- /.box-header -->
                        
                            <div class="col-md-6" style="background: #ffffff;">
                
                                 

                          <div class='box-body pad'>
                                   <div class="form-group">
                                        <label>GST NO :</label>
                                        <input type="text" name="txtgst_no" class="form-control " placeholder="Enter Gst Number..." value="<?php echo htmlspecialchars($objcompany['company_gst_no']); ?>" />
                                    </div>


                                   <div class="form-group">
                                        <label>TAX NO :</label>
                                        <input type="text" name="txtvat_no" class="form-control " placeholder="Enter Vat Number..." value="<?php echo htmlspecialchars($objcompany['company_vat_no']); ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Other TAX NO :</label>
                                        <input type="text" name="txtcst_no" class="form-control " placeholder="Enter Cst Number..." value="<?php echo htmlspecialchars($objcompany['company_cst_no']); ?>" />
                                    </div>
                                    
                                     
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-6" style="background: #ffffff;">
                <div class='box-body pad'>
                                    
                                    <div class="form-group">
                                        <label>Impuesto de Ventas(%):</label>
                                        <input type="text" name="txtsales_tax3" class="form-control " placeholder="Enter Sales Tax Value..." value="<?php echo htmlspecialchars($objcompany['sales_tax3']); ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label>Servicio Resurante (%):</label>
                                        <input type="text" name="txtsales_tax1" class="form-control " placeholder="Enter Sales Tax Value..." value="<?php echo htmlspecialchars($objcompany['sales_tax1']); ?>" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Impuesto 3 (%):</label>
                                        <input type="text" name="txtsales_tax2" class="form-control " placeholder="Enter Sales Tax Value..." value="<?php echo htmlspecialchars($objcompany['sales_tax2']); ?>" />
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                </div>
                            </div>
                    </div><!-- /.box -->
        </div><!-- /.col-->
      </div>  
       <br/> 
      <div class="row">  
         <div class='col-md-12'>
          <div class='box box-success' >
                      <div class='box-header'>
                            <h3 class='box-title'>Total de mesas que desee!!</h3>
                        </div><!-- /.box-header -->
            <div class='box-body pad'>
              
                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Mesas</label>
                                        <input type="text" name="txttable" class="form-control " placeholder="Ingrese el numero de mesas.." value="<?php echo htmlspecialchars($objcompany['total_table']); ?>" />
                                    </div>
                </div>
                <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Mesas Parcelas</label>
                                        <input type="text" name="txtparcel" class="form-control " placeholder="ngrese el numero de Parcelas..." value="<?php echo htmlspecialchars($objcompany['total_parcel']); ?>" />
                                    </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
      <div class="row">
                <div class='col-md-12'>
          <div class='box box-warning' >
                      <div class='box-header'>
                            <h3 class='box-title'>Terminos & Politicas</h3>
                        </div><!-- /.box-header -->
            <div class='box-body pad'>
              
                <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Políticas</label>
                                        <input type="text" name="txtterms" class="form-control " placeholder="Enter Terms..." value="<?php echo htmlspecialchars($objcompany['company_terms']); ?>" />
                                    </div>
                </div>
                
            </div>
          </div>
        </div>
      </div>
      <div class="row">

        <div class='col-md-12'>
          <div class='box box-warning' >
                      <div class='box-header'>
                            <h3 class='box-title'>SMS </h3>
                        </div><!-- /.box-header -->
            <div class='box-body pad'>
            <div class="col-md-6">
              
                <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Enviar mensaje ?</label>
                                        <input type="checkbox" name="chksms"   value="yes"  <?php if($objcompany['sms'] == 'yes') echo 'checked="checkd"'; ?>/>
                                    </div>
                </div>
                
            </div>
            
            <div class="col-md-6">
              
                <div class="col-md-12">
                                  <div class="form-group">
                                      <label>Message API</label>
                                        <input type="text" name="txtsmsapi" class="form-control "  value="<?php echo htmlspecialchars($objcompany['sms_api']); ?>" />
                                    </div>
                </div>
                
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">          
        <div class='col-md-12'>
          <div class='box box-primary' >
            <div class='box-body pad'>
              
                
                <div class="col-md-6 " style="background: #ffffff;">
                  <label>Guardar!!! </label>
                </div>
                <div class="col-md-6 text-right">
                
                  <div class="form-group">
                    <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save"/>
                  </div>
                  
                 <!-- <script type="text/javascript" language="javascript">
                    document.getElementById('txtfirst_name').focus();
                  </script>-->
                </div>
            </div>
          </div>
        </div>
      </div>
      

      <div class="row">  
				<div class='col-md-12'>
          <div class='box box-danger' >
            <div class='box-body pad'>
              
                
                <div class="col-md-6 " style="background: #ffffff;">
                    <label>Generar Respaldo de Base  de Datos !!!</label>
                </div>
                <div class="col-md-6 text-right">
                  <div class="form-group">
                    <button type="button" onclick="backupg();" id="babcd" class="btn btn-danger">Generar Respaldo</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
        <style>
 .loading-image {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;
}
.loader
{
    display: none;
    width:200px;
    height: 200px;
    position: fixed;
    top: 40%;
    left: 50%;
    text-align:center;
    margin-left: -50px;
    margin-top: -100px;
    z-index:99999;
    overflow: auto;
  
}
 </style>
        <div class="loader">
           <center>
             <img class="loading-image" src="images/ajax-loader1.gif" alt="loading..">
           </center>
        </div>
                   
              <?php echo form_close(); ?>


              
           
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php // include footer FIle 
 
 $this->load->view('admin/include/footer.php'); ?>	





