# UpdateRepoCommitRequest


## Fields

| Field                                                  | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `repoCommit`                                           | [Shared\RepoCommit](../../Models/Shared/RepoCommit.md) | :heavy_check_mark:                                     | N/A                                                    |
| `connectionId`                                         | *string*                                               | :heavy_check_mark:                                     | ID of the connection                                   |
| `fields`                                               | array<*string*>                                        | :heavy_minus_sign:                                     | Comma-delimited fields to return                       |
| `id`                                                   | *string*                                               | :heavy_check_mark:                                     | ID of the Commit                                       |