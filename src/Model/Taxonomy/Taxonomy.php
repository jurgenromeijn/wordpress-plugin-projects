<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\Taxonomy;
use JurgenRomeijn\Projects\Model\Rewrite;
use JurgenRomeijn\Projects\Model\WordpressModelInterface;
use JurgenRomeijn\Projects\Model\WordpressModelToArrayTrait;

/**
 * This class represents the Taxonomy in wordpress.
 * @package JurgenRomeijn\Projects\Model\Taxonomy
 */
class Taxonomy implements WordpressModelInterface
{

    use WordpressModelToArrayTrait;

    private $hierarchical;
    private $label;
    private $public;
    private $showInRest;
    private $rewrite;

    /**
     * Taxonomy constructor.
     * @param bool $hierarchical
     * @param string $label
     * @param bool $public
     * @param bool $showInRest
     * @param Rewrite $rewrite
     */
    public function __construct(
        $hierarchical = true,
        $label = 'type',
        $public = true,
        $showInRest = true,
        Rewrite $rewrite = null)
    {
        $this->hierarchical = $hierarchical;
        $this->label = $label;
        $this->public = $public;
        $this->showInRest = $showInRest;
        $this->rewrite = $rewrite;
    }

    /**
     * @return bool
     */
    public function isHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * @param bool $hierarchical
     */
    public function setHierarchical($hierarchical)
    {
        $this->hierarchical = $hierarchical;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
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

}
