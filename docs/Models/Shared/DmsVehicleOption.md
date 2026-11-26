# DmsVehicleOption

An installed vehicle option or package


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `code`                                                                      | *?string*                                                                   | :heavy_minus_sign:                                                          | Option or RPO code                                                          |
| `costAmount`                                                                | *?float*                                                                    | :heavy_minus_sign:                                                          | Dealer cost                                                                 |
| `description`                                                               | *?string*                                                                   | :heavy_minus_sign:                                                          | N/A                                                                         |
| `priceAmount`                                                               | *?float*                                                                    | :heavy_minus_sign:                                                          | Retail price                                                                |
| `type`                                                                      | [?Shared\DmsVehicleOptionType](../../Models/Shared/DmsVehicleOptionType.md) | :heavy_minus_sign:                                                          | Factory-fitted or dealer-added                                              |