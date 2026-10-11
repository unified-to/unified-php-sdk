# ListUnifiedSecretsmanagerSecretsRequest


## Fields

| Field                                    | Type                                     | Required                                 | Description                              |
| ---------------------------------------- | ---------------------------------------- | ---------------------------------------- | ---------------------------------------- |
| `limit`                                  | *?float*                                 | :heavy_minus_sign:                       | Maximum number of secrets to return      |
| `offset`                                 | *?float*                                 | :heavy_minus_sign:                       | Number of secrets to skip                |
| `query`                                  | *?string*                                | :heavy_minus_sign:                       | Filter secrets by name                   |
| `secretsmanagerId`                       | *string*                                 | :heavy_check_mark:                       | The secrets manager to list secrets from |