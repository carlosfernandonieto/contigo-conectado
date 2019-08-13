<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<div class="container text-center">
    <p>Filtrar por:</p>
    <div class="dropdown d-inline-block">
            <div class="btn-group">
                <button type="button" class="btn filter" data-toggle="dropdown">
                Ciudad
                </button>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split">
            
                <div class="dropdown-menu">
                <a class="dropdown-item nacional_flo" href="#">Nacional</a>
                <a class="dropdown-item barranquilla_flo" href="#">Barranquilla</a>
                <a class="dropdown-item bogota_flo" href="#">Bogotá</a>
                <a class="dropdown-item bucaramanga_flo" href="#">Bucaramanga</a>
                <a class="dropdown-item cali_flo" href="#">Cali</a>   
                <a class="dropdown-item cartagena_flo" href="#">Cartagena</a>
                <a class="dropdown-item manizales_flo" href="#">Manizales</a>
                <a class="dropdown-item medellin_flo" href="#">Medellín</a>
                <a class="dropdown-item pereira_flo" href="#">Pereira</a>          
                </div>
            </div>
    </div>


    <div class="dropdown d-inline-block">
           <div class="btn-group">
                <button type="button" class="btn filter" data-toggle="dropdown">
                Genero
                </button>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split">
                <div class="dropdown-menu">
                <a class="dropdown-item genero_h" href="#">Hombre</a>
                <a class="dropdown-item genero_m" href="#">Mujer</a>     
                </div>
           </div>
    </div>

    <div class="dropdown d-inline-block">
           <div class="btn-group">
                <button type="button" class="btn filter" data-toggle="dropdown">
                Edad
                </button>
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split">
                <div class="dropdown-menu">
                <a class="dropdown-item edad_1" href="#">9 a 10</a>
                <a class="dropdown-item edad_2" href="#">11 a 12</a>     
                <a class="dropdown-item edad_3" href="#">13 a 14</a>
                <a class="dropdown-item edad_4" href="#">15 a 16</a>
                </div>
           </div>
    </div>
</div>