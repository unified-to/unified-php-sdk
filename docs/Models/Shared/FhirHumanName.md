# FhirHumanName


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `family`                                                      | *?string*                                                     | :heavy_minus_sign:                                            | Family name (often called surname)                            |
| `given`                                                       | array<*string*>                                               | :heavy_minus_sign:                                            | Given names (not always first), including middle names        |
| `prefix`                                                      | array<*string*>                                               | :heavy_minus_sign:                                            | Parts that come before the name, eg. Dr                       |
| `text`                                                        | *?string*                                                     | :heavy_minus_sign:                                            | Text representation of the full name                          |
| `use`                                                         | *?string*                                                     | :heavy_minus_sign:                                            | usual \| official \| temp \| nickname \| anonymous \| old \| maiden |