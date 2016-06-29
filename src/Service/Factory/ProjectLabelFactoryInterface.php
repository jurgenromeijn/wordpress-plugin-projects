<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Model\PostType\Labels;

/**
 * This interface describes which features a ProjectLabelHelper should have.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
interface ProjectLabelFactoryInterface
{
    /**
     * Create the labels used for the project post type.
     * @return Labels
     */
    public function createLabels();
}
