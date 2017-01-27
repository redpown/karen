<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Helpers;

/**
 * Description of htmlHead
 *
 * @author Redpo
 */
class htmlHead {
    function getMeta($objModelMeta){
        $getMeta .= '<base href="'.$objModelMeta->base.'" target="_blank">';
        $getMeta .= '<meta charset="'.$objModelMeta->title.'">';
        $getMeta .= '<meta charset="'.$objModelMeta->charset.'">';
        $getMeta .= '<meta name="description" content="'.$objModelMeta->description.'">';
        foreach ($objModelMeta->keywords as $key => $value){
            $keywords .= $value.',';
        }
        $getMeta .= '<meta name="keywords" content="'.$keywords.'">';
        $getMeta .= '<meta name="author" content="'.$objModelMeta->author.'">';
        echo $getMeta;
    }
}
