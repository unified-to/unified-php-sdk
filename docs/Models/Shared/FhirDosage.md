# FhirDosage


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `doseAndRate`                                                                     | array<[Shared\FhirDoseAndRate](../../Models/Shared/FhirDoseAndRate.md)>           | :heavy_minus_sign:                                                                | Amount of medication administered                                                 |
| `route`                                                                           | [?Shared\PropertyFhirDosageRoute](../../Models/Shared/PropertyFhirDosageRoute.md) | :heavy_minus_sign:                                                                | How drug should enter body                                                        |
| `text`                                                                            | *?string*                                                                         | :heavy_minus_sign:                                                                | Free text dosage instructions e.g. SIG                                            |