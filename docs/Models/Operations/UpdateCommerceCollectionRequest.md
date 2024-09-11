# UpdateCommerceCollectionRequest


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `connectionId`                                                          | *string*                                                                | :heavy_check_mark:                                                      | ID of the connection                                                    |
| `id`                                                                    | *string*                                                                | :heavy_check_mark:                                                      | ID of the Collection                                                    |
| `commerceCollection`                                                    | [?Shared\CommerceCollection](../../Models/Shared/CommerceCollection.md) | :heavy_minus_sign:                                                      | A collection of items/products/services                                 |
| `fields`                                                                | array<*string*>                                                         | :heavy_minus_sign:                                                      | Comma-delimited fields to return                                        |