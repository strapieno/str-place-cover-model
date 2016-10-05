<?php
namespace Strapieno\PlaceCover\Model\Entity;

/**
 * Class CoverAwareTrait
 */
trait CoverAwareTrait
{
    /**
     * @var string
     */
    protected $cover;

    /**
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     * @return $this
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }
}