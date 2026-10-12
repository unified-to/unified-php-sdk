# ComputeAvailability


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `level`                                                    | [?Shared\Level](../../Models/Shared/Level.md)              | :heavy_minus_sign:                                         | Normalized stock level                                     |
| `quantity`                                                 | *?float*                                                   | :heavy_minus_sign:                                         | Number of units available, when the vendor reports a count |
| `regionId`                                                 | *?string*                                                  | :heavy_minus_sign:                                         | The region this availability applies to                    |