# PrintingShipment

A shipment of a print order


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `carrier`                                                     | *?string*                                                     | :heavy_minus_sign:                                            | Carrier name                                                  |
| `deliveredAt`                                                 | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | Shipment identifier                                           |
| `service`                                                     | *?string*                                                     | :heavy_minus_sign:                                            | Delivery service name                                         |
| `shippedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format)                      |
| `trackingNumber`                                              | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `trackingUrl`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |