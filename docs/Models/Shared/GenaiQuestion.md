# GenaiQuestion


## Fields

| Field                                                                         | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `id`                                                                          | *string*                                                                      | :heavy_check_mark:                                                            | A caller-chosen key; the matching answer is returned with the same id.        |
| `instructions`                                                                | *string*                                                                      | :heavy_check_mark:                                                            | The question to evaluate.                                                     |
| `options`                                                                     | array<*string*>                                                               | :heavy_minus_sign:                                                            | CHOICE: the options to select from; SCORE: the ordered levels (lowest first). |
| `type`                                                                        | [Shared\GenaiQuestionType](../../Models/Shared/GenaiQuestionType.md)          | :heavy_check_mark:                                                            | N/A                                                                           |