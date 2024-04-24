<?php

namespace Caesardev\Klarna\Contracts;

interface KlarnaHPPInterface
{
    /**
     * Create a new payment session with Klarna.
     *
     * @param array $orderDetails
     * @return array
     */
    public function createSession(array $orderDetails): array;

    /**
     * Retrieve session details from Klarna using the session ID.
     *
     * @param string $sessionId
     * @return array
     */
    public function getSession(string $sessionId): array;

    /**
     * Handle the callback received from Klarna after payment completion.
     *
     * @param string $sessionId
     * @return array
     */
    public function handleCallback(string $sessionId): array;
}
