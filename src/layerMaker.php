<?php

/**
 *
 * @package    layerMaker
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Layer and method parser.
 * @link       https://github.com/aliyilmaz/layerMaker
 *
 */
class layerMaker
{

    /**
     * Layer and method parser.
     *
     * @param string $str
     * @return array
     */
    public function layerMaker($str=''){

        // The output variable is being created.
        $output = [];

        // The parameter variable is being created.
        $assets = [];

        // The layer and parameter are being parsed.
        if(strstr($str, ':')){ 
            $assets = explode(':', trim($str, ':')); } else { $assets[] = $str; }

        // If there is no layer parameter, only the layer is defined
        if(count($assets) == 1){ $output['layer'] = $assets[0]; }

        // If there is a layer and its parameter, it is assigned to the variable.
        if(count($assets) == 2){ list($output['layer'], $output['params']) = $assets; }

        // Parameters are obtained
        if(isset($output['params'])){
            $output['params'] = (strstr($output['params'], '@')) ? explode('@', trim($output['params'], '@')) : $output['params'] = [$output['params']];
        }
        
        return $output;
    }
}
