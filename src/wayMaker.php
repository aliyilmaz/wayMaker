<?php

/**
 *
 * @package    wayMaker
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Way and parameter separator.
 * @link       https://github.com/aliyilmaz/wayMaker
 *
 */
class wayMaker
{

    /**
     * Layer and method parser.
     *
     * @param string $str
     * @return array
     */
    public function wayMaker($str=''){

        // The output variable is being created.
        $output = [];

        // The parameter variable is being created.
        $assets = [];

        // The layer and parameter are being parsed.
        if(strstr($str, ':')){ 
            $assets = explode(':', trim($str, ':')); } else { $assets[] = $str; }

        // If there is no layer parameter, only the layer is defined
        if(count($assets) == 1){ $output['way'] = $assets[0]; }

        // If there is a layer and its parameter, it is assigned to the variable.
        if(count($assets) == 2){ list($output['way'], $output['params']) = $assets; }

        // Parameters are obtained
        if(isset($output['params'])){
            $output['params'] = (strstr($output['params'], '@')) ? explode('@', trim($output['params'], '@')) : $output['params'] = [$output['params']];
        } else {
            $output['params'] = [];
        }
        
        return $output;
    }
}
