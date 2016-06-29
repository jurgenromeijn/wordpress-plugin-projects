<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model;

/**
 * This interface contains methods specifically used for a Wordpress model.
 * @package JurgenRomeijn\Projects\Model
 */
interface WordpressModelInterface
{
    /**
     * Get a represnetation of the model in array format.
     * @return array
     */
    public function toArray();
}
