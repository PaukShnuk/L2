package internal

func deleteDuplicate(in []string) []string {
	data := make(map[string]struct{})
	for _, str := range in {
		if _, ok := data[str]; !ok {
			data[str] = struct{}{}
		}
	}
	resultData := make([]string, 0, len(data))
	for key := range data {
		resultData = append(resultData, key)
	}
	return resultData
}
