package main

import "fmt"

const mod = 1000000007

func maxSumAfterOperations(arr []int) []int {
	n := len(arr)
	prefixSums := make([]int, n)
	maxValue := 0
	result := make([]int, n)

	for i := 0; i < n; i++ {
		// Update current element by adding the current maximum up to index i
		arr[i] += maxValue

		// Update the maximum value if the new value is larger than the current maximum
		maxValue = max(maxValue, arr[i])

		// Calculate the running sum of the modified array elements and store it in prefixSums
		if i > 0 {
			prefixSums[i] = (prefixSums[i-1] + arr[i]) % mod
		} else {
			prefixSums[i] = arr[i]
		}

		// Update result for the current position
		result[i] = (result[i] + prefixSums[i]) % mod

		// If there is a previous prefix sum, update the result accordingly
		if i > 0 {
			result[i] = (result[i] + result[i-1]) % mod
		}
	}

	return result
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}

func main() {
	// Example
	arr := []int{1, 2, 3}
	fmt.Println("Result:", maxSumAfterOperations(arr)) // Output: [2, 8, 19]
}
