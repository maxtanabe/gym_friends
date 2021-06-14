# gym_friends

・Users table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| id           | bigint    | primary key, AI  |
| password     | text      | NOT NULL         |
| nickname     | text      | NOT NULL         |
| name         | text      | NOT NULL         |
| name_hiragana| text      | NOT NULL         |
| mail         | text      | NOT NULL         |
| phone        | text      | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |

imageはActiveStorage的なの使う。


・FavFriends table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| user_id      | bigint    | primary key, AI  |
| fav_user_id  | bigint    | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |


・Gyms table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| id           | bigint    | primary key, AI  |
| Gym_name     | text      | NOT NULL         |
| mail         | text      | NOT MULL         |
| phone        | text      | NOT NULL         |
| address      | text      | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |


･FavGyms table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| user_id      | bigint    | primary key, AI  |
| fav_gym_id   | bigint    | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |


・orders table

|    Column    |    Type   |      Option      |
| ------------ | --------- | ---------------- |
| id           | bigint    | primary key, AI  |
| name         | text      | NOT NULL         |
| name_hiragana| text      | NOT NULL         |
| mail         | text      | NOT NULL         |
| phone        | text      | NOT NULL         |
| created      | datetime  | NOT NULL         |
| modified     | datetime  | NOT NULL         |

