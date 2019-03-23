<?php
/**
 * Created by PhpStorm.
 * User: vsilvestre
 * Date: 23/03/19
 * Time: 12:09
 */

namespace App\Message;

/**
 * Class Email
 * @package App\Message
 */
class Email
{
    private $to;
    private $from;
    private $content;

    /**
     * Email constructor.
     * @param $to
     * @param $from
     * @param $content
     */
    public function __construct(string $to, string $from, string $content)
    {
        $this->to = $to;
        $this->from = $from;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }


}