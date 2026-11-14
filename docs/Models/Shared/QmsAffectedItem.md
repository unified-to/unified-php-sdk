# QmsAffectedItem

A part, lot or serial affected by a quality record


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `documentId`                                                      | *?string*                                                         | :heavy_minus_sign:                                                | The PlmDocument ID, when the same vendor also provides PLM        |
| `lotNumber`                                                       | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `partId`                                                          | *?string*                                                         | :heavy_minus_sign:                                                | The PlmPart (revision) ID, when the same vendor also provides PLM |
| `partNumber`                                                      | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `quantity`                                                        | *?float*                                                          | :heavy_minus_sign:                                                | Quantity affected                                                 |
| `revision`                                                        | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |
| `serialNumber`                                                    | *?string*                                                         | :heavy_minus_sign:                                                | N/A                                                               |