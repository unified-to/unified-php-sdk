# HealthcareIdentifier


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `system`                                                                            | *?string*                                                                           | :heavy_minus_sign:                                                                  | The namespace/system URI that issued the identifier                                 |
| `type`                                                                              | [?Shared\HealthcareIdentifierType](../../Models/Shared/HealthcareIdentifierType.md) | :heavy_minus_sign:                                                                  | The kind of identifier                                                              |
| `value`                                                                             | *string*                                                                            | :heavy_check_mark:                                                                  | The identifier value                                                                |