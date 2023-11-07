# CreateUnifiedWebhookRequest


## Fields

| Field                                                                                    | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `webhook`                                                                                | [?\Unified\Unified_to\Models\Shared\Webhook](../../models/shared/Webhook.md)             | :heavy_minus_sign:                                                                       | N/A                                                                                      |
| `connectionId`                                                                           | *string*                                                                                 | :heavy_check_mark:                                                                       | ID of the connection                                                                     |
| `events`                                                                                 | array<[\Unified\Unified_to\Models\Operations\Events](../../models/operations/Events.md)> | :heavy_minus_sign:                                                                       | Which events to subscribe to.                                                            |
| `object`                                                                                 | *string*                                                                                 | :heavy_check_mark:                                                                       | The object to subscribe to                                                               |