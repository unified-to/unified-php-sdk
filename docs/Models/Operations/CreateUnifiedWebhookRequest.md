# CreateUnifiedWebhookRequest


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `webhook`                                                                     | [Shared\Webhook](../../Models/Shared/Webhook.md)                              | :heavy_check_mark:                                                            | A webhook is used to POST new/updated information to your server.             |
| `includeAll`                                                                  | *?bool*                                                                       | :heavy_minus_sign:                                                            | When true, send existing/historic data. When false, no historic data is sent. |