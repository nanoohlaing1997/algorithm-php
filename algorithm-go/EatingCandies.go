package main

import (
	"fmt"
)

func maxCandies(candies []int) int {
	n := len(candies)
	prefixSum := make([]int, n)
	suffixSum := make([]int, n)

	// Calculate prefix and suffix sums
	prefixSum[0] = candies[0]
	for i := 1; i < n; i++ {
		prefixSum[i] = prefixSum[i-1] + candies[i]
	}

	suffixSum[n-1] = candies[n-1]
	for i := n - 2; i >= 0; i-- {
		suffixSum[i] = suffixSum[i+1] + candies[i]
	}
	fmt.Printf("here : %d\n", suffixSum)

	maxCandies := 0
	for i := 0; i < n; i++ {
		// Check if Alice and Bob can eat equal
		aliceEat := prefixSum[i]
		bobEat := suffixSum[n-1-i]
		if aliceEat <= bobEat {
			maxCandies = max(maxCandies, aliceEat)
		}
	}

	return maxCandies
}

func eatingCandies(candies []int) int {
	n := len(candies)
	if n < 2 {
		return 0
	}

	alice := 0
	bob := n - 1

	aliceAteCandies := 0
	bobAteCandies := 0

	for alice <= bob {
		if aliceAteCandies <= bobAteCandies {
			aliceAteCandies += candies[alice]
			alice++
		} else {
			bobAteCandies += candies[bob]
			bob--
		}
	}
	fmt.Println(aliceAteCandies)
	fmt.Println(bobAteCandies)
	return min(aliceAteCandies, bobAteCandies)
}

func main() {
	candies := []int{1, 2, 1, 1, 1}
	// maxCandies := maxCandies(candies)
	result := eatingCandies(candies)
	fmt.Printf("Maximum candies they can eat: %d\n", result)
}
