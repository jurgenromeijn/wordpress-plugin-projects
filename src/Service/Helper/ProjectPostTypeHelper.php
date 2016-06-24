<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\PostType\PostType;
use JurgenRomeijn\Projects\Model\PostType\SupportOptions;
use JurgenRomeijn\Projects\Model\Rewrite;

class ProjectPostTypeHelper implements ProjectPostTypeHelperInterface
{

    const SLUG = 'projects';

    private $labelHelper;
    private static $instance;

    private function __construct()
    {
        $this->labelHelper = ProjectLabelHelper::getInstance();
    }

    public function createPostType()
    {
        $projectPostType = new PostType();

        $projectPostType->setLabels($this->labelHelper->createLabel());
        $projectPostType->setPublic(true);
        $projectPostType->setHasArchive(true);
        $projectPostType->setRewrite(new Rewrite(self::SLUG));
        $projectPostType->setSupports(array(
            SupportOptions::TITLE,
            SupportOptions::EDITOR,
            SupportOptions::THUMBNAIL,
            SupportOptions::EXCERPT,
            SupportOptions::REVISIONS
        ));

        return $projectPostType;
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
