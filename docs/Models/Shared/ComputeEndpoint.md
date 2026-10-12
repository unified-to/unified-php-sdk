# ComputeEndpoint


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `isAuthRequired`                                    | *?bool*                                             | :heavy_minus_sign:                                  | Whether the URL requires a vendor access token      |
| `port`                                              | *?float*                                            | :heavy_minus_sign:                                  | The port inside the instance                        |
| `protocol`                                          | [?Shared\Protocol](../../Models/Shared/Protocol.md) | :heavy_minus_sign:                                  | The protocol served on this port                    |
| `url`                                               | *?string*                                           | :heavy_minus_sign:                                  | Public or proxied URL for this port                 |