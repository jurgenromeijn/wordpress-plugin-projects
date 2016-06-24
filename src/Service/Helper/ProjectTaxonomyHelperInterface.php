<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\Taxonomy\Taxonomy;

/**
 * This interface describes which features a ProjectPostProjectTaxonomyHelper should have
 * @package JurgenRomeijn\Projects\Service\Helper
 */
interface ProjectTaxonomyHelperInterface
{

    /**
     * Create the project taxonomy.
     * @return Taxonomy
     */
    public function createTaxonomy();

}
