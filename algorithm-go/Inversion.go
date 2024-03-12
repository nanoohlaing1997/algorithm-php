package main

import (
	"fmt"
)

func main() {
	arr := []int{5, 3, 4, 2, 1}

	inversions, inversionList := countInversions(arr)

	fmt.Println("Number of inversions:", inversions)
	fmt.Println("Individual inversions:")
	for _, inv := range inversionList {
		fmt.Println(inv)
	}
}

func countInversions(arr []int) (int, [][]int) {
	_, inversions, inversionList := mergeSort(arr)
	return inversions, inversionList
}

func mergeSort(arr []int) ([]int, int, [][]int) {
	count := len(arr)

	if count <= 1 {
		return arr, 0, [][]int{} // Return empty inversion list for base case
	}

	mid := count / 2
	left, leftInversions, leftList := mergeSort(arr[:mid])
	right, rightInversions, rightList := mergeSort(arr[mid:])

	merged, splitInversions, splitInversionList := merge(left, right)

	totalInversions := leftInversions + rightInversions + splitInversions

	// Concatenate inversion lists correctly
	inversionList := append(leftList, rightList...)
	inversionList = append(inversionList, splitInversionList...)

	return merged, totalInversions, inversionList
}

func merge(left, right []int) ([]int, int, [][]int) {
	merged := make([]int, 0, len(left)+len(right))
	inversions := 0
	i, j := 0, 0

	inversionList := [][]int{} // Initialize inversion list

	for i < len(left) && j < len(right) {
		if left[i] <= right[j] {
			merged = append(merged, left[i])
			i++
		} else {
			inversions += len(left) - i
			merged = append(merged, right[j])
			j++
			inversionList = append(inversionList, []int{left[i], right[j]}) // Record inversion pair
		}
	}

	merged = append(merged, left[i:]...)
	merged = append(merged, right[j:]...)

	return merged, inversions, inversionList
}
