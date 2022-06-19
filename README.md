# ol-permanent-course-api

## URL
バックエンド
[https://olpc-api.herokuapp.com/](https://olpc-api.herokuapp.com/)

## APIの呼び出し

### All Courses
URL
`https://olpc-api.herokuapp.com/api/courses`

Response

```json
[

  {
    "id":             "int - コースID",
    "name":           "varchar - コース名",
    "prefecture":     "varchar - 都道府県",
    "managementNo":   "int - 都道府県協会での管理番号",
    "licenseNo":      "int - JOAでの公認コース管理番号",
    "startPosition":  "varchar - スタート地点の場所(住所とは限らない)",
    "latitude":       "null - スタート地点の緯度(未実装)",
    "longitude":      "null - スタート地点の経度(未実装)",
    "whereToGet":     "varchar - 地図取扱所(住所とは限らない)",
    "distance":       "double - コース距離"
  },
  {
    "id":1,
    "name":"県民の森",
    "prefecture":"宮城",
    "managementNo":3,
    "licenseNo":262,
    "startPosition":"県民の森中央記念館",
    "latitude":null,
    "longitude":null,
    "whereToGet":"県民の森中央記念館",
    "distance":"10"
  }
]
```
