# CreateUnifiedWebhookRequest


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `webhook`                                                         | [Shared\Webhook](../../Models/Shared/Webhook.md)                  | :heavy_check_mark:                                                | A webhook is used to POST new/updated information to your server. |
| `includeAll`                                                      | *?bool*                                                           | :heavy_minus_sign:                                                | When set, all of the existing data will sent back to your server. |