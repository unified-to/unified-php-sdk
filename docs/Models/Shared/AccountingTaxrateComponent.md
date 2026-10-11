# AccountingTaxrateComponent


## Fields

| Field                                                              | Type                                                               | Required                                                           | Description                                                        |
| ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ | ------------------------------------------------------------------ |
| `isCompound`                                                       | *?bool*                                                            | :heavy_minus_sign:                                                 | True when this component is charged on top of the other components |
| `name`                                                             | *?string*                                                          | :heavy_minus_sign:                                                 | Name of the tax component, e.g. GST or PST                         |
| `rate`                                                             | *?float*                                                           | :heavy_minus_sign:                                                 | Rate of this component, in %                                       |