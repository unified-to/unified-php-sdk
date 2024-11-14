# ScimUser


## Fields

| Field                                                                                                                                                                               | Type                                                                                                                                                                                | Required                                                                                                                                                                            | Description                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `active`                                                                                                                                                                            | *?bool*                                                                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `addresses`                                                                                                                                                                         | array<[Shared\ScimAddress](../../Models/Shared/ScimAddress.md)>                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `displayName`                                                                                                                                                                       | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `emails`                                                                                                                                                                            | array<[Shared\ScimEmail](../../Models/Shared/ScimEmail.md)>                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `entitlements`                                                                                                                                                                      | array<[Shared\ScimEntitlement](../../Models/Shared/ScimEntitlement.md)>                                                                                                             | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `externalId`                                                                                                                                                                        | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `groups`                                                                                                                                                                            | array<[Shared\ScimUserGroups](../../Models/Shared/ScimUserGroups.md)>                                                                                                               | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `id`                                                                                                                                                                                | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `ims`                                                                                                                                                                               | array<[Shared\ScimIms](../../Models/Shared/ScimIms.md)>                                                                                                                             | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `locale`                                                                                                                                                                            | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `meta`                                                                                                                                                                              | [?Shared\PropertyScimUserMeta](../../Models/Shared/PropertyScimUserMeta.md)                                                                                                         | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `name`                                                                                                                                                                              | [?Shared\PropertyScimUserName](../../Models/Shared/PropertyScimUserName.md)                                                                                                         | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `nickName`                                                                                                                                                                          | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `password`                                                                                                                                                                          | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `phoneNumbers`                                                                                                                                                                      | array<[Shared\ScimPhoneNumber](../../Models/Shared/ScimPhoneNumber.md)>                                                                                                             | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `photos`                                                                                                                                                                            | array<[Shared\ScimPhoto](../../Models/Shared/ScimPhoto.md)>                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `preferredLanguage`                                                                                                                                                                 | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `profileUrl`                                                                                                                                                                        | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `roles`                                                                                                                                                                             | array<[Shared\ScimRole](../../Models/Shared/ScimRole.md)>                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | Student, Faculty, ...                                                                                                                                                               |
| `schemas`                                                                                                                                                                           | array<[Shared\PropertyScimUserSchemas](../../Models/Shared/PropertyScimUserSchemas.md)>                                                                                             | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `timezone`                                                                                                                                                                          | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `title`                                                                                                                                                                             | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `urnIetfParamsScimSchemasExtensionEnterprise20User`                                                                                                                                 | [?Shared\PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20User](../../Models/Shared/PropertyScimUserUrnIetfParamsScimSchemasExtensionEnterprise20User.md)               | :heavy_minus_sign:                                                                                                                                                                  | an organization.                                                                                                                                                                    |
| `urnIetfParamsScimSchemasExtensionLatticeAttributes10User`                                                                                                                          | [?Shared\PropertyScimUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User](../../Models/Shared/PropertyScimUserUrnIetfParamsScimSchemasExtensionLatticeAttributes10User.md) | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `urnIetfParamsScimSchemasExtensionPeakon20User`                                                                                                                                     | [?Shared\PropertyScimUserUrnIetfParamsScimSchemasExtensionPeakon20User](../../Models/Shared/PropertyScimUserUrnIetfParamsScimSchemasExtensionPeakon20User.md)                       | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `userName`                                                                                                                                                                          | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `userType`                                                                                                                                                                          | *?string*                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `x509Certificates`                                                                                                                                                                  | array<[Shared\ScimRole](../../Models/Shared/ScimRole.md)>                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |