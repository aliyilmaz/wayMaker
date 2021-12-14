<?php

/**
 *
 * @package    layerMaker
 * @version    Release: 1.0.0
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
            $assets = explode(':', $str); } else { $output['layer'] = $str; }

        // If there is a layer and its parameter, it is assigned to the variable.
        if(count($assets) == 2){ 
            list($output['layer'], $output['params']) = $assets; }

        // If the layer parameter is multiple, it is parsed.
        if(isset($output['params'])){
            if(strstr($output['params'], '@')){
                $output['params'] = explode('@', $output['params']); }}
        
        return $output;
    }
}
