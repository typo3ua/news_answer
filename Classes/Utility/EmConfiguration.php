<?php

namespace T3UA\NewsAnswer\Utility;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

class EmConfiguration
{
    /**
     * Parses the extension settings.
     *
     * @return \GeorgRinger\News\Domain\Model\Dto\EmConfiguration
     * @throws \Exception If the configuration is invalid.
     */
    public static function getSettings()
    {
        $configuration = self::parseSettings();
        require_once(ExtensionManagementUtility::extPath('news_answer') . 'Classes/Domain/Model/Dto/EmConfiguration.php');
        $settings = new \T3UA\NewsAnswer\Domain\Model\Dto\EmConfiguration($configuration);
        return $settings;
    }
    /**
     * Parse settings and return it as array
     *
     * @return array unserialized extconf settings
     */
    public static function parseSettings()
    {
        $extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class);
        $settings = $extensionConfiguration->get('news_answer');
        if (!is_array($settings)) {
            $settings = [];
        }
        return $settings;
    }
}