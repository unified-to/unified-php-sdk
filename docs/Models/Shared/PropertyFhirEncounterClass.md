# PropertyFhirEncounterClass

Classification of patient encounter


## Fields

| Field                                                               | Type                                                                | Required                                                            | Description                                                         |
| ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- | ------------------------------------------------------------------- |
| `code`                                                              | *?string*                                                           | :heavy_minus_sign:                                                  | Classification of patient encounter, eg. AMB, EMER, IMP, VR         |
| `extension`                                                         | array<[Shared\FhirExtension](../../Models/Shared/FhirExtension.md)> | :heavy_minus_sign:                                                  | data-absent-reason when the encounter class is unknown              |
| `system`                                                            | *?string*                                                           | :heavy_minus_sign:                                                  | Identity of the terminology system (v3-ActCode)                     |