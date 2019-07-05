<?php

namespace App\Entity;

/**
 * RiaDashboardBox.
 */
class RiaDashboardBox
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $ria_user_id;

    /**
     * @var string
     */
    private $template;

    /**
     * @var int
     */
    private $sequence;

    /**
     * @var \Entity\User
     */
    private $ria;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ria_user_id.
     *
     * @param int $riaUserId
     *
     * @return RiaDashboardBox
     */
    public function setRiaUserId($riaUserId)
    {
        $this->ria_user_id = $riaUserId;

        return $this;
    }

    /**
     * Get ria_user_id.
     *
     * @return int
     */
    public function getRiaUserId()
    {
        return $this->ria_user_id;
    }

    /**
     * Set template.
     *
     * @param string $template
     *
     * @return RiaDashboardBox
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template.
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set sequence.
     *
     * @param int $sequence
     *
     * @return RiaDashboardBox
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence.
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set ria.
     *
     * @param \Entity\User $ria
     *
     * @return RiaDashboardBox
     */
    public function setRia(User $ria = null)
    {
        $this->ria = $ria;

        return $this;
    }

    /**
     * Get ria.
     *
     * @return \Entity\User
     */
    public function getRia()
    {
        return $this->ria;
    }
}