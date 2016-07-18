<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;

/**
 * This helper contains all functionality for localization of this plugin.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class TranslationHelper implements TranslationHelperInterface
{
    private $path;
    private $domain;

    /**
     * TranslationHelper constructor.
     * @param string $path
     * @param string $domain
     */
    public function __construct($path, $domain)
    {
        $this->path = $path;
        $this->domain = $domain;
        $this->loadTextDomain();
    }

    /**
     * Load the Wordpress plugin text domain.
     */
    public function loadTextDomain()
    {
        load_plugin_textdomain(
            $this->domain,
            false,
            dirname(plugin_basename(__FILE__)) . $this->path
        );
    }

    /**
     * Translate a string for this plugin.
     * @param $string
     * @return string
     */
    public function translate($string)
    {
        return __($string, $this->domain);
    }
}
