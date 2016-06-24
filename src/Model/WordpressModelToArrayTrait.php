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
        $objectVars = get_object_vars($this);
        $returnArray = array();

        foreach ($objectVars as $key => $value)
        {
            $snakeCaseKey = $this->convertKeyToSnakeCase($key);
            if(is_object($value))
            {
                $returnArray[$snakeCaseKey] = $value->toArray();
            }
            elseif($value != null)
            {
                $returnArray[$snakeCaseKey] = $value;
            }
        }

        return $returnArray;
    }

    private function convertKeyToSnakeCase($key)
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $key));
    }

}