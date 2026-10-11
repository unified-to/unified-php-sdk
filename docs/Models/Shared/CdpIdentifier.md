# CdpIdentifier


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `encoding`                                                            | *?string*                                                             | :heavy_minus_sign:                                                    | The encoding of the identifier value (eg. raw, sha256)                |
| `isPrimary`                                                           | *?bool*                                                               | :heavy_minus_sign:                                                    | Whether this is the primary identifier for the profile                |
| `source`                                                              | *?string*                                                             | :heavy_minus_sign:                                                    | The source that provided this identifier                              |
| `type`                                                                | [?Shared\CdpIdentifierType](../../Models/Shared/CdpIdentifierType.md) | :heavy_minus_sign:                                                    | The type of the identifier (eg. EMAIL, USER_ID, ANONYMOUS_ID)         |
| `value`                                                               | *string*                                                              | :heavy_check_mark:                                                    | The identifier value that resolves to the profile                     |