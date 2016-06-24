<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\Rewrite;
use JurgenRomeijn\Projects\Model\Taxonomy\Taxonomy;

/**
 * This helper contains all functionality to create the taxonomy for a project.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class ProjectTaxonomyHelper implements ProjectTaxonomyHelperInterface
{

    const SLUG = 'projects';
    const LABEL = 'Project Types';

    private static $instance;

    /**
     * Empty private constructor as this is a application wide component.
     * ProjectTaxonomyHelper constructor.
     */
    private function __construct() {}

    /**
     * Create the project post type.
     * @return PostType
     */
    public function createTaxonomy()
    {
        $taxonomy = new Taxonomy();

        $taxonomy->setHierarchical(true);
        $taxonomy->setPublic(true);
        $taxonomy->setLabel(self::LABEL);
        $taxonomy->setRewrite(new Rewrite(self::SLUG, true));

        return $taxonomy;
    }

    /**
     * return an instance of this singleton.
     * @return ProjectTaxonomyHelper
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
