<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model;


trait WordpressModelToArrayTrait
{
    
    /**
     * @return array
     */
    public function toArray()
    {
        $array = get_object_vars($this);
        $tmpArray = $array;

        foreach ($tmpArray as $key => $value)
        {
            if(is_object($value))
            {
                $array[$key] = $value->toArray();
            }
        }

        return $array;
    }

}