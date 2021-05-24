# gym_friends

・Users table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| id           | bigint    | primary key, AI  |
| password     | text      | NOT NULL         |
| nickname     | text      | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |

imageはActiveStorage的なの使う。