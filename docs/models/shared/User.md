# User

The User object represents you on the system. A user can belong to multiple workspaces (ie. organizations).


## Fields

| Field                                                         | Type                                                          | Required                                                      | Description                                                   |
| ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- | ------------------------------------------------------------- |
| `createdAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |
| `email`                                                       | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `environment`                                                 | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `id`                                                          | *?string*                                                     | :heavy_minus_sign:                                            | N/A                                                           |
| `meta`                                                        | [?PropertyUserMeta](../../models/shared/PropertyUserMeta.md)  | :heavy_minus_sign:                                            | N/A                                                           |
| `name`                                                        | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `updatedAt`                                                   | [\DateTime](https://www.php.net/manual/en/class.datetime.php) | :heavy_minus_sign:                                            | N/A                                                           |
| `workspaceId`                                                 | *string*                                                      | :heavy_check_mark:                                            | N/A                                                           |
| `workspaceIds`                                                | array<*string*>                                               | :heavy_check_mark:                                            | A list of all of the user's workspaces                        |