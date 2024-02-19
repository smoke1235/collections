<?php

namespace Peter\Collections\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Peter\Collections\Support\MessageBag
     */
    public function getMessageBag();
}
