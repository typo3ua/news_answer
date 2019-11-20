<?php

namespace T3UA\NewsAnswer\Domain\Model\Dto;

class EmConfiguration extends \GeorgRinger\News\Domain\Model\Dto\EmConfiguration
{

    /**
     * @var bool
     */
    protected $contentElementAnswerRelation = true;

    /**
     * @var bool
     */
    protected $contentElementAnswerPreview = true;

    /**
     * @return bool
     */
    public function getContentElementAnswerRelation(): bool
    {
        return (bool)$this->contentElementAnswerRelation;
    }

    /**
     * @return bool
     */
    public function getContentElementAnswerPreview(): bool
    {
        return (bool)$this->contentElementAnswerPreview;
    }
}