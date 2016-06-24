<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\PostType\PostType;

/**
 * This interface describes which features a ProjectPostTypeHelper should have
 * @package JurgenRomeijn\Projects\Service\Helper
 */
interface ProjectPostTypeHelperInterface
{

    /**
     * Create the project post type.
     * @return PostType
     */
    public function createPostType();

}
