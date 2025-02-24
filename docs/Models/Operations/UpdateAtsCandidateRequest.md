# UpdateAtsCandidateRequest


## Fields

| Field                                                      | Type                                                       | Required                                                   | Description                                                |
| ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- | ---------------------------------------------------------- |
| `atsCandidate`                                             | [Shared\AtsCandidate](../../Models/Shared/AtsCandidate.md) | :heavy_check_mark:                                         | N/A                                                        |
| `connectionId`                                             | *string*                                                   | :heavy_check_mark:                                         | ID of the connection                                       |
| `id`                                                       | *string*                                                   | :heavy_check_mark:                                         | ID of the Candidate                                        |
| `fields`                                                   | array<*string*>                                            | :heavy_minus_sign:                                         | Comma-delimited fields to return                           |