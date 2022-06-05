# ol-permanent-course-api

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
    "name":"\u770c\u6c11\u306e\u68ee",
    "prefecture":"\u5bae\u57ce",
    "managementNo":3,
    "licenseNo":262,
    "startPosition":"\u770c\u6c11\u306e\u68ee\u4e2d\u592e\u8a18\u5ff5\u9928",
    "latitude":null,
    "longitude":null,
    "whereToGet":"\u770c\u6c11\u306e\u68ee\u4e2d\u592e\u8a18\u5ff5\u9928",
    "distance":"10"
  }
]
```

注意点

json_encodeの指定のやり方が分からなかったので、Responseの日本語部分がunicodeで表示されています。

使用している文字コードは`UTF-8`です。
