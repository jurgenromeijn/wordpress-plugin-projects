<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;

/**
 * This interface declares all functionality the Projects Portfolio should be able to do.
 * @package JurgenRomeijn\Projects
 */
interface ProjectsServiceInterface
{

    public function createPostType();
    public function createTaxonomy();

}
