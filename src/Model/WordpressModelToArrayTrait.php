<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model;

/**
 * This trait gives model classes the functionality to convert themselfs to an array format Wordpress can use.
 * @package JurgenRomeijn\Projects\Model
 */
trait WordpressModelToArrayTrait
{
    /**
     * return an array representation of the internal model.
     * @return array
     */
    public function toArray()
    {
        $objectVars = get_object_vars($this);
        $returnArray = [];

        foreach ($objectVars as $key => $value) {
            $snakeCaseKey = $this->convertKeyToSnakeCase($key);
            if (is_object($value)) {
                $returnArray[$snakeCaseKey] = $value->toArray();
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
