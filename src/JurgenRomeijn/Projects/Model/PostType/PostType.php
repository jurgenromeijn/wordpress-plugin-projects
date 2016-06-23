<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\PostType;


use JurgenRomeijn\Projects\Model\Rewrite;

/**
 * This class represents the post type in wordpress.
 * @package JurgenRomeijn\Projects\Model\PostType
 */
class PostType
{
    private $labels;
    private $public;
    private $hasArchive;
    private $rewrite;
    private $supports = array();

    /**
     * PostType constructor.
     * @param Labels $labels
     * @param bool $public
     * @param bool $hasArchive
     * @param Rewrite $rewrite
     * @param array $supports
     */
    public function __construct(Labels $labels, $public, $hasArchive, Rewrite $rewrite, array $supports)
    {
        $this->labels = $labels;
        $this->public = $public;
        $this->hasArchive = $hasArchive;
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
    public function getPublic()
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
    public function getHasArchive()
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