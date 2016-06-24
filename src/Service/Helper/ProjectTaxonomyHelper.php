<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\Rewrite;
use JurgenRomeijn\Projects\Model\Taxonomy\Taxonomy;

class ProjectTaxonomyHelper implements ProjectTaxonomyHelperInterface
{

    const SLUG = 'projects';
    const LABEL = 'Project Types';

    private static $instance;

    private function __construct() {}

    public function createTaxonomy()
    {
        $taxonomy = new Taxonomy();

        $taxonomy->setHierarchical(true);
        $taxonomy->setPublic(true);
        $taxonomy->setLabel(self::LABEL);
        $taxonomy->setRewrite(new Rewrite(self::SLUG, true));

        return $taxonomy;
    }

    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
