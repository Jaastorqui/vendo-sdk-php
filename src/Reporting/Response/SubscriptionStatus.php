<?php
namespace VendoSdk\Reporting\Response;

/**
 *
 * @package VendoSdk\Reconciliation\Response
 *
 * @property int $id
 * @property int $code
 * @property int $message
 */
class SubscriptionStatus
{
    private int $id;
    private ?int $code;
    private string|int|null $message;

    public function __construct(int $subscriptionId, ?int $code, ?string $message)
    {
        $this->id = $subscriptionId;
        $this->code = $code;
        $this->message = $message;
    }
}