# CdpConsent


## Fields

| Field                                                                             | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `purpose`                                                                         | *?string*                                                                         | :heavy_minus_sign:                                                                | The consent purpose or objective (eg. marketing, analytics)                       |
| `status`                                                                          | [?Shared\CdpConsentStatus](../../Models/Shared/CdpConsentStatus.md)               | :heavy_minus_sign:                                                                | The consent status for this purpose                                               |
| `updatedAt`                                                                       | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                     | :heavy_minus_sign:                                                                | When the consent status was last updated (ISO-8601 / YYYY-MM-DDTHH:MM:SSZ format) |