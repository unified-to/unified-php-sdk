# DmsAppointmentService

A service requested on an appointment


## Fields

| Field                                             | Type                                              | Required                                          | Description                                       |
| ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- | ------------------------------------------------- |
| `complaint`                                       | *?string*                                         | :heavy_minus_sign:                                | Customer's own words                              |
| `estimateAmount`                                  | *?float*                                          | :heavy_minus_sign:                                | Estimated price                                   |
| `estimatedHours`                                  | *?float*                                          | :heavy_minus_sign:                                | N/A                                               |
| `id`                                              | *?string*                                         | :heavy_minus_sign:                                | Line identifier                                   |
| `name`                                            | *?string*                                         | :heavy_minus_sign:                                | Service or operation description                  |
| `opcodeId`                                        | *?string*                                         | :heavy_minus_sign:                                | The DmsOpcode ID                                  |
| `payType`                                         | [?Shared\PayType](../../Models/Shared/PayType.md) | :heavy_minus_sign:                                | N/A                                               |
| `technicianUserIds`                               | array<*string*>                                   | :heavy_minus_sign:                                | Pre-assigned technicians, as HR Employees         |