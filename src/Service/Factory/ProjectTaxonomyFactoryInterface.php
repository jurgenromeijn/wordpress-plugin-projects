<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Model\Taxonomy\Taxonomy;

/**
 * This interface describes which features a ProjectPostProjectTaxonomyHelper should have
 * @package JurgenRomeijn\Projects\Service\Factory
 */
interface ProjectTaxonomyFactoryInterface
{
    /**
     * Create the project taxonomy.
     * @return Taxonomy
     */
    public function createTaxonomy();
}
