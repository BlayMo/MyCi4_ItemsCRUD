<?php

/* 
 *  CodeIgniter
 * 
 *  An open source application development framework for PHP
 * 
 *  This content is released under the MIT License (MIT)
 * 
 *  Copyright (c) 2014-2019 British Columbia Institute of Technology
 *  Copyright (c) 2019-2020 CodeIgniter Foundation
 * 
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 * 
 *  @package    CodeIgniter
 *  @author     CodeIgniter Dev Team
 *  @copyright  2019-2020 CodeIgniter Foundation
 *  @license    https://opensource.org/licenses/MIT  MIT License
 *  @link       https://codeigniter.com
 *  @since      Version 4.0.0
 *  @filesource
 *  

 *  --------------------- xxx My Codigo xxx -------------------------
 * 
 *   @Proyecto: MyCi4_ItemsCrud
 *   @Autor:    BlayMo
 *   @Objeto:   Aprendizaje/Desarrollo
 *   @Comienzo: 11-04-2020
 *   @licencia  http://opensource.org/licenses/MIT  MIT License
 *   @link      https://github.com/BlayMo
 *   @Version   1.0.0
 * 
 *   @mail: expresoweb2019@gmail.com
 * 
 *   PHP 7.4.4 + Codeigniter 4.0.2 + Bootstrap 4.4.1
 * 
 */
?>


<div class='card shadow mb-4' style='margin-bottom: 50px' >
   <div class='card-header py-3'>
      <h4 class='m-0 font-weight-bold text-primary'>Categorias <?php echo $button ?></h4>
   </div>
<div class='card-body'>
   
   <!--<form>-->
      <?php echo form_open($action); ?>
      
      
      <div class="form-group">
         <label for="varchar">Categoria <?php echo $validation->getError('categoria') ?></label>
         <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoria" value="<?php echo $categoria; ?>" />
      </div>
      <div class="form-group">
         <label for="varchar">Descripcion Cat <?php echo $validation->getError('descripcion_cat') ?></label>
         <input type="text" class="form-control" name="descripcion_cat" id="descripcion_cat" placeholder="Descripcion Cat" value="<?php echo $descripcion_cat; ?>" />
      </div>
      
      <div class="form-group">
         <label for="int">Orden Cat <?php echo $validation->getError('orden_cat') ?></label>
         <input type="text" class="form-control" name="orden_cat" id="orden_cat" placeholder="Orden Cat" value="<?php echo $orden_cat; ?>" />
      </div>
      <div class="form-group">
         <label for="varchar">Color Cat <?php echo $validation->getError('color_cat') ?></label>
         <input type="text" class="form-control" name="color_cat" id="color_cat" placeholder="Color Cat" value="<?php echo $color_cat; ?>" readonly />
      </div>
                          
       <input type="hidden" name="id_padre"   value="<?php echo $id_padre; ?>" />
      <input type="hidden" name="id_categoria" value="<?php echo $id_categoria; ?>" /> 
      <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
      <a href="<?php echo site_url($retorno) ?>" class="btn btn-default">Cancel</a>
   </form>
</div>
</div>

