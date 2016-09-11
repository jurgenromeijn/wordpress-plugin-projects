<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Mapper;

/**
 * A mapper to map objects to arrays.
 * @package JurgenRomeijn\Projects\Service\Mapper
 */
class ArrayMapper implements ArrayMapperInterface
{
    /**
     * Get a representation of an object in array format.
     * @param $object
     * @return array
     */
    public function toArray($object)
    {
        $objectVars = get_object_vars($object);
        $returnArray = [];

        foreach ($objectVars as $key => $value) {
            $snakeCaseKey = $this->convertKeyToSnakeCase($key);
            if (is_object($value)) {
                $returnArray[$snakeCaseKey] = $this->toArray($value);
            } elseif ($value != null) {
                $returnArray[$snakeCaseKey] = $value;
            }
        }

        return $returnArray;
    }

    /**
     * Convert camelCase to snake_case.
     * @param $key
     * @return string
     */
    private function convertKeyToSnakeCase($key)
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $key));
    }

}
