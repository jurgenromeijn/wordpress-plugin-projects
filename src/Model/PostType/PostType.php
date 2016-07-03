<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\PostType;

use JurgenRomeijn\Projects\Model\Rewrite;
use JurgenRomeijn\Projects\Model\WordPressModelInterface;
use JurgenRomeijn\Projects\Model\WordPressModelToArrayTrait;

/**
 * This class represents the post type in wordpress.
 * @package JurgenRomeijn\Projects\Model\PostType
 */
class PostType implements WordPressModelInterface
{
    use WordPressModelToArrayTrait;

    private $labels;
    private $public;
    private $hasArchive;
    private $showInRest;
    private $rewrite;
    private $supports;

    /**
     * PostType constructor.
     * @param Labels $labels
     * @param bool $public
     * @param bool $hasArchive
     * @param bool $showInRest
     * @param Rewrite $rewrite
     * @param array $supports
     */
    public function __construct(
        Labels $labels = null,
        $public = true,
        $hasArchive = true,
        $showInRest = true,
        Rewrite $rewrite = null,
        array $supports = []
    ) {
        $this->labels = $labels;
        $this->public = $public;
        $this->hasArchive = $hasArchive;
        $this->showInRest = true;
        $this->rewrite = $rewrite;
        $this->supports = $supports;
    }

    /**
     * @return Labels
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param Labels $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    /**
     * @return bool
     */
    public function isPublic()
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return bool
     */
    public function hasArchive()
    {
        return $this->hasArchive;
    }

    /**
     * @param bool $hasArchive
     */
    public function setHasArchive($hasArchive)
    {
        $this->hasArchive = $hasArchive;
    }

    /**
     * @return boolean
     */
    public function isShowInRest()
    {
        return $this->showInRest;
    }

    /**
     * @param boolean $showInRest
     */
    public function setShowInRest($showInRest)
    {
        $this->showInRest = $showInRest;
    }

    /**
     * @return Rewrite
     */
    public function getRewrite()
    {
        return $this->rewrite;
    }

    /**
     * @param Rewrite $rewrite
     */
    public function setRewrite($rewrite)
    {
        $this->rewrite = $rewrite;
    }

    /**
     * @return array
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * @param array $supports
     */
    public function setSupports($supports)
    {
        $this->supports = $supports;
    }
}
