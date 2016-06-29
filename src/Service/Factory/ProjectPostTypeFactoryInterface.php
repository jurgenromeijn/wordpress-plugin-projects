<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Model\PostType\PostType;

/**
 * This interface describes which features a ProjectPostTypeFactory should have
 * @package JurgenRomeijn\Projects\Service\Factory
 */
interface ProjectPostTypeFactoryInterface
{
    /**
     * Create the project post type.
     * @return PostType
     */
    public function createPostType();
}
