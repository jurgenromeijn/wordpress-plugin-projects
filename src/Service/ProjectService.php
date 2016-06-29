<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;
use JurgenRomeijn\Projects\Util\SingletonTrait;
use JurgenRomeijn\Projects\Service\Helper\ProjectPostTypeHelper;
use JurgenRomeijn\Projects\Service\Helper\ProjectTaxonomyHelper;
use JurgenRomeijn\Projects\Service\Helper\TranslationHelper;

/**
 * This class contains the methods that create the post type and taxonomy.
 * @package JurgenRomeijn\Projects
 */
class ProjectService implements ProjectServiceInterface
{

    use SingletonTrait;

    const PROJECT_POST_TYPE_NAME = 'project';
    const PROJECT_TAXONOMY_NAME = 'project_types';

    private $postTypeHelper;
    private $taxonomyHelper;

    /**
     * ProjectsService constructor.
     */
    private function __construct()
    {
        $this->postTypeHelper = ProjectPostTypeHelper::getInstance();
        $this->taxonomyHelper = ProjectTaxonomyHelper::getInstance();
    }

    /**
     * Create the project post type.
     */
    public function createPostType()
    {
        $projectPostType = $this->postTypeHelper->createPostType();
        register_post_type(
            self::PROJECT_POST_TYPE_NAME,
            $projectPostType->toArray());
    }

    /**
     * Create the project taxonomy.
     */
    public function createTaxonomy()
    {
        $projectTaxonomy = $this->taxonomyHelper->createTaxonomy();
        register_taxonomy(
            self::PROJECT_TAXONOMY_NAME,
            self::PROJECT_POST_TYPE_NAME,
            $projectTaxonomy->toArray());
    }

}
