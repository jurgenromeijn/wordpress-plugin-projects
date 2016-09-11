<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Mapper;

/**
 * This interface describes all functionality an ArrayMapper should have.
 * @package JurgenRomeijn\Projects\Service\Mapper
 */
interface ArrayMapperInterface
{
    /**
     * Get a representation of an object in array format.
     * @return array
     */
    public function toArray();
}
