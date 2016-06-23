<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\Taxonomy;
use JurgenRomeijn\Projects\Model\Rewrite;

/**
 * This class represents the Taxonomy in wordpress.
 * @package JurgenRomeijn\Projects\Model\Taxonomy
 */
class Taxonomy
{

    private $hierarchical;
    private $label;
    private $public;
    private $rewrite;

    /**
     * Taxonomy constructor.
     * @param bool $hierarchical
     * @param string $label
     * @param bool $public
     * @param Rewrite $rewrite
     */
    public function __construct($hierarchical, $label, $public, Rewrite $rewrite)
    {
        $this->hierarchical = $hierarchical;
        $this->label = $label;
        $this->public = $public;
        $this->rewrite = $rewrite;
    }

    /**
     * @return bool
     */
    public function getHierarchical()
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
