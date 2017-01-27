<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Helpers;

/**
 * Description of Forms
 *
 * @author Redpo
 */
class Forms {
    
    
    function GenerationForms($objForms){
        $getInputs = '<form class = " '.$objForms->bootsraptClass.' " method = " '.$objForms->method.' ">';
        foreach ($objForms->inputs as $key => $value) {
           // if($value == 'nome'){
               
                $getInputs .= '<div class="form-group row">';
                    $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                    $getInputs .= '<div class="col-xs-10">';
                    $getInputs .= '<input class="form-control" type="text" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                    $getInputs .= '</div>';
                $getInputs .= '</div>';
                
                
           /* }
            if(($value == 'procurar')||($value == 'pesquisar')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="search" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='url'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="url" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if(($value =='telefone')||($value =='celuar')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="tel" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='senha'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="password" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='numero'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="number" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='data-local'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="datetime-local" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='data'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="date" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if($value =='mes'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="month" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
             if($value =='semana'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="week" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
             if($value =='hora'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="time" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
             if($value =='cor'){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="color" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
             if(($value =='email')||($value =='e-mail')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">'.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control" type="email" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
             if(($value =='arquivo')||($value =='file')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">Selecionar '.$value.'</label>';
                $getInputs .= '<div class="col-xs-10">';
                $getInputs .= '<input class="form-control-file" type="file" name ="'.$value.'" placeholde="'.$value.'" id="'.$value.'">';
                $getInputs .= '<small id="fileHelp" class="form-text text-muted"></small>'; 
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }
            if(($value =='estado')||($value =='uf')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'" class="col-xs-2 col-form-label">Selecionar '.$value.'</label>';
                $getInputs .= '<select class="form-control" id="exampleSelect1">
                                    <option>AC</option>
                                    <option>Al</option>
                                    <option>AP</option>
                                    <option>AM</option>
                                    <option>BA</option>
                                    <option>CE</option>
                                    <option>DF</option>
                                    <option>ES</option>
                                    <option>GO</option>
                                    <option>MA</option>
                                    <option>MT</option>
                                    <option>MS</option>
                                    <option>MG</option>
                                    <option>PA</option>
                                    <option>PB</option>
                                    <option>PR</option>
                                    <option>PE</option>
                                    <option>PI</option>
                                    <option>RJ</option>
                                    <option>RN</option>
                                    <option>RS</option>
                                    <option>RO</option>
                                    <option>RR</option>
                                    <option>SC</option>
                                    <option>SP</option>
                                    <option>SE</option>
                                    <option>TO</option>
                                </select>'; 
                $getInputs .= '</div>';
            }
             if(($value =='texto')||($value =='textarea')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<label for="'.$value.'">'.$value.'</label>';
                $getInputs .= '<textarea class="form-control" id="'.$value.'" rows="'.$rows.'"></textarea>';
                $getInputs .= '</div>';
            }
             if(($value =='radio')||($value =='radios')){
                $getInputs .= '<div class="form-group row">';
                $getInputs .= '<legend>'.$value.'</legend>';
                $getInputs .= '<div class="form-check">';
                $getInputs .= '<label class="form-check-label">';
                $getInputs .=  '<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" placeholde="option1" checked>';
                $getInputs .= '</label>';
                $getInputs .= '</div>';
                $getInputs .= '<div class="form-check">';
                $getInputs .= '<label class="form-check-label">';
                $getInputs .=  '<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" placeholde="option2">';
                $getInputs .= '</label>';
                $getInputs .= '</div>';
                $getInputs .= '</div>';
            }*/
        }
       
        $getInputs .= '<div class="form-group row">';
                $getInputs .= '<div class="col-xs-4 col-md-4">';
                    $getInputs .= '<button class="btn btn-primary pesquisar">';
                        $getInputs .= $objForms->btnName1;
                    $getInputs .= '</button>';
                $getInputs .= '</div>';
        
            $getInputs .= '<div class=" col-xs-4 col-md-4  col-md-offset-4">';
                $getInputs .= '<button class="btn btn-primary pesquisar">';
                        $getInputs .= $objForms->btnName2;
                    $getInputs .= '</button>';
                $getInputs .= '</div>';
        $getInputs .= '</div>';
         $getInputs .= "</form>";
        echo $getInputs;
        
    }
}







