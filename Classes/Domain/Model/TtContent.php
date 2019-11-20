<?php
declare(strict_types = 1);

namespace T3UA\NewsAnswer\Domain\Model;

class TtContent extends \GeorgRinger\News\Domain\Model\TtContent
{

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUser>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $ttContentfeuserUser;

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getContentFeUser()
    {
        return $this->ttContentfeuserUser;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $ttContentfeuserUser
     */
    public function setTtContentfeuserUser($ttContentfeuserUser)
    {
        $this->ttContentfeuserUser = $ttContentfeuserUser;
    }
}