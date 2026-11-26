# PropertyFhirConditionClinicalStatus

active | recurrence | relapse | inactive | remission | resolved (condition-clinical)


## Fields

| Field                                                                 | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `coding`                                                              | array<[Shared\FhirCoding](../../Models/Shared/FhirCoding.md)>         | :heavy_minus_sign:                                                    | Codes defined by a terminology system                                 |
| `extension`                                                           | array<[Shared\FhirExtension](../../Models/Shared/FhirExtension.md)>   | :heavy_minus_sign:                                                    | Extensions, eg. data-absent-reason when a required concept is unknown |
| `text`                                                                | *?string*                                                             | :heavy_minus_sign:                                                    | Plain text representation of the concept                              |