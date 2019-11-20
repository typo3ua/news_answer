<?php
//declare(strict_types = 1);

namespace T3UA\NewsAnswer\Domain\Model;

class News extends \GeorgRinger\News\Domain\Model\News
{

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\TtContent>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $contentElementsAnswer;

    /**
     * Initialize categories and media relation
     *
     * @return \GeorgRinger\News\Domain\Model\News
     */
    public function __construct()
    {
        $this->contentElementsAnswer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Get content elements answer
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
     */
    public function getContentElementsAnswer()
    {
        return $this->contentElementsAnswer;
    }

    /**
     * Set content element answer list
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $contentElementsAnswer content elements answer
     */
    public function setContentElementsAnswer($contentElementsAnswer)
    {
        $this->contentElementsAnswer = $contentElementsAnswer;
    }

    /**
     * Adds a content element answer to the record
     *
     * @param \GeorgRinger\News\Domain\Model\TtContent $contentElementAnswer
     */
    public function addContentElementAnswer(\GeorgRinger\News\Domain\Model\TtContent $contentElementAnswer)
    {
        if ($this->getContentElementsAnswer() === null) {
            $this->contentElementsAnswer = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        $this->contentElementsAnswer->attach($contentElementAnswer);
    }

    /**
     * Get id list of content elements answer
     *
     * @return string
     */
    public function getContentElementAnswerIdList()
    {
        return $this->getIdOfContentElementsAnswer();
    }

    /**
     * Get translated id list of content elements answer
     *
     * @return string
     */
    public function getTranslatedContentElementAnswerIdList()
    {
        return $this->getIdOfContentElementsAnswer(false);
    }

    /**
     * Collect id list
     *
     * @param bool $original
     * @return string
     */
    protected function getIdOfContentElementsAnswer($original = true)
    {
        $idList = [];
        $contentElementsAnswer = $this->getContentElementsAnswer();
        if ($contentElementsAnswer) {
            foreach ($this->getContentElementsAnswer() as $contentElementAnswer) {
                $idList[] = $original ? $contentElementAnswer->getUid() : $contentElementAnswer->_getProperty('_localizedUid');
            }
        }
        return implode(',', $idList);
    }
}