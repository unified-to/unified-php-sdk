# PropertyCalendarBotAutomaticLeave


## Fields

| Field                                                                  | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `detectBots`                                                           | *?bool*                                                                | :heavy_minus_sign:                                                     | Whether to leave if only bots remain                                   |
| `noParticipantsTimeout`                                                | *?float*                                                               | :heavy_minus_sign:                                                     | Seconds to wait when no other participants before leaving (default: 2) |
| `waitingRoomTimeout`                                                   | *?float*                                                               | :heavy_minus_sign:                                                     | Seconds to wait in waiting room before leaving (default: 1200)         |