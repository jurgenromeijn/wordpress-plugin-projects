<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;

/**
 * This interface describes which features a TranslationHelper should have
 * @package JurgenRomeijn\Projects\Service\Helper
 */
interface TranslationHelperInterface
{

    /**
     * Load the Wordpress plugin text domain.
     */
    public function loadTextDomain();

    /**
     * Translate a string for this plugin.
     * @param $string
     * @return string
     */
    public function translate($string);

}