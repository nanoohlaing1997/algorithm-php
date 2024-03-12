package main

import (
	"fmt"
	"math"
)

func binarySearch(data []int32, target int32) int32 {
	leftIndex := 0
	rightIndex := len(data) - 1

	for leftIndex <= rightIndex {
		pivot := int32(math.Floor(float64(leftIndex+rightIndex) / 2))

		if data[pivot] == target {
			return pivot
		}

		if target > data[pivot] {
			leftIndex = int(pivot)
		}

		if target < data[pivot] {
			rightIndex = int(pivot) - 1
		}
	}

	return -1
}

func main() {
	data := []int32{-1, 0, 3, 5, 9, 12}
	target := int32(-1)
	result := binarySearch(data, target)
	fmt.Println(result)
}
