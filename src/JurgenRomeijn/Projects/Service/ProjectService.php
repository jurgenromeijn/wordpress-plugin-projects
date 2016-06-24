<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;
use JurgenRomeijn\Projects\Service\Helper\ProjectPostTypeHelper;
use JurgenRomeijn\Projects\Service\Helper\ProjectTaxonomyHelper;

/**
 * This class contains the methods that create the post type and taxonomy.
 * @package JurgenRomeijn\Projects
 */
class ProjectService implements ProjectServiceInterface
{
    const PROJECT_POST_TYPE_NAME = "project";
    const PROJECT_TAXONOMY_NAME = "projects";

    private $postTypeHelper;
    private $taxonomyHelper;

    /**
     * ProjectsService constructor.
     */
    public function __construct()
    {
        $this->postTypeHelper = ProjectPostTypeHelper::getInstance();
        $this->taxonomyHelper = ProjectTaxonomyHelper::getInstance();
    }

    public function createPostType()
    {
        $projectPostType = $this->postTypeHelper->createPostType();
        register_post_type(PROJECT_POST_TYPE_NAME, $this->convertModelToArray($projectPostType));
    }

    public function createTaxonomy()
    {
        $projectTaxonomy = $this->taxonomyHelper->createTaxonomy();
        register_taxonomy(PROJECT_TAXONOMY_NAME, PROJECT_POST_TYPE_NAME, $this->convertModelToArray($projectTaxonomy));
    }

    private function convertModelToArray($model)
    {
        return json_encode($model);
    }

}
