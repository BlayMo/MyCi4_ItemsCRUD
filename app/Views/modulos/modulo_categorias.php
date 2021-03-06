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


<!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Categor&iacute;as</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <!--<ul class="list-unstyled mb-0">-->
                <div class="table-responsive" >
                    <table>   
                        <tbody>
                            <tr>
                                <td>
                                <a href="<?= site_url('fcat/0') ?>" class="btn  btn-link btn-sm"><?php echo 'Reset'; ?></a>    
                                </td>
                            </tr>
                            <?php foreach ($todo_categorias_data as $categorias) { ?>
                                <tr>                                  
                                    <td>
                                        <a href="<?= site_url('fcat/' . $categorias->id_categoria) ?>" class="btn  btn-link btn-sm"><?php echo $categorias->categoria; ?></a>
                                        <?php
                                        if ($categorias->tiene_hijos == 'SI') {
                                            echo view('modulos/mod_tabla_subcategorias', ['todo_subcat_data' => $todo_subcat_data,
                                                'id_categoria' => $categorias->id_categoria]);
                                        }
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            <!--</ul>-->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>