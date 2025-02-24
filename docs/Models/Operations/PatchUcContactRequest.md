# PatchUcContactRequest


## Fields

| Field                                                                   | Type                                                                    | Required                                                                | Description                                                             |
| ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| `ucContact`                                                             | [Shared\UcContact](../../Models/Shared/UcContact.md)                    | :heavy_check_mark:                                                      | A contact represents a person that optionally is associated with a call |
| `connectionId`                                                          | *string*                                                                | :heavy_check_mark:                                                      | ID of the connection                                                    |
| `id`                                                                    | *string*                                                                | :heavy_check_mark:                                                      | ID of the Contact                                                       |
| `fields`                                                                | array<*string*>                                                         | :heavy_minus_sign:                                                      | Comma-delimited fields to return                                        |