package main

import (
	"fmt"
)

func starsAndBars(s string, startIndices []int, endIndices []int) []int {
	var result []int

	for i := 0; i < len(startIndices); i++ {
		startIndex := startIndices[i] - 1
		endIndex := endIndices[i] - 1

		subString := s[startIndex:endIndex]

		// between bars counting stars
		starCount := 0
		betweenBars := false
		for _, str := range subString {
			if str == '|' {
				betweenBars = !betweenBars
			} else if betweenBars && str == '|' {
				starCount++
			}
		}

		// starCount := strings.Count(subString, "*")

		result = append(result, starCount)
	}
	return result
}

func main() {
	s := "*|*|"
	startIndices := []int{1}
	endIndices := []int{3}

	result := starsAndBars(s, startIndices, endIndices)
	fmt.Println("Result: ", result)
}
