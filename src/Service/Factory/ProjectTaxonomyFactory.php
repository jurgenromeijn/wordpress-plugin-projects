<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Service\Helper\TranslationHelperInterface;
use JurgenRomeijn\Projects\Model\Rewrite;
use JurgenRomeijn\Projects\Model\Taxonomy\Taxonomy;

/**
 * This factory contains all functionality to create the taxonomy for a project.
 * @package JurgenRomeijn\Projects\Service\Factory
 */
class ProjectTaxonomyFactory implements ProjectTaxonomyFactoryInterface
{
    const SLUG = 'projectTaxonomySlug';
    const LABEL = 'projectTaxonomyType';

    private $translationHelper;

    /**
     * ProjectTaxonomyFactory constructor.
     * @param TranslationHelperInterface $translationHelper
     */
    public function __construct(TranslationHelperInterface $translationHelper)
    {
        $this->translationHelper = $translationHelper;
    }

    /**
     * Create the project post type.
     * @return PostType
     */
    public function createTaxonomy()
    {
        $taxonomy = new Taxonomy();

        $taxonomy->setHierarchical(true);
        $taxonomy->setPublic(true);
        $taxonomy->setShowInRest(true);
        $taxonomy->setLabel($this->translationHelper->translate(self::LABEL));
        $taxonomy->setRewrite(new Rewrite($this->translationHelper->translate(self::SLUG), true));

        return $taxonomy;
    }
}
