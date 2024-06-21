package main

import "math"

// func merge(nums1 []int, m int, nums2 []int, n int) {
// 	i := m - 1; // 2
// 	j := n - 1; // 2
// 	p := (m + n) - 1; // 5

// 	for i >= 0 && j >= 0 {
// 		if nums1[i] >= nums2[j] {
// 			nums1[p] = nums1[i]
// 			i--
// 		} else {
// 			nums1[p] = nums2[j]
// 			j--
// 		}
// 		p--
// 	}

// 	for j >= 0 {
// 		nums1[p] = nums2[j]
// 		j--
// 	}
// }

// func main() {
//     nums1 := []int{1, 2, 3, 0, 0, 0}
//     m := 3
//     nums2 := []int{2, 5, 6}
//     n := 3

//     merge(nums1, m, nums2, n)

//     fmt.Println(nums1)
// }

// func removeElement(nums []int, val int) int {
// 	i := 0
// 	for _, num := range nums {
// 		if num != val {
// 			nums[i] = num
// 			i++
// 		}
// 	}
// 	return i
// }

// func main() {
//     nums := []int{3, 2, 2, 3}
//     val := 3

//     newLength := removeElement(nums, val)

//     fmt.Println("New length of nums array:", newLength)
//     fmt.Println("Modified nums array:", nums[:newLength])
// }

// func removeDuplicates(nums []int) int {
// 	uniqueIndex := 0
// 	for i := 1; i <= len(nums) - 1; i++ {
// 		if nums[uniqueIndex] != nums[i] {
// 			uniqueIndex++
// 			nums[uniqueIndex] = nums[i]
// 		}
// 	}
// 	return uniqueIndex + 1
// }

// func main() {
//     nums := []int{1, 1, 2, 2, 3, 4, 4, 5}

//     newLength := removeDuplicates(nums)

//     fmt.Println("New length of nums array:", newLength)
//     fmt.Println("Modified nums array:", nums)
// }

// func majorityElement(nums []int) int {
// 	arrayCounts := make(map[int]int)

// 	for _, num := range nums {
// 		arrayCounts[num]++;
// 	}

// 	var majorityNum int
// 	maxCount := 0
// 	for num, count := range arrayCounts {
// 		if count > maxCount {
// 			maxCount = count
// 			majorityNum = num
// 		}
// 	}
// 	return majorityNum
// }

// func main() {
// 	nums := []int{3, 3, 4, 2, 4, 4, 2, 4, 4}
// 	majority := majorityElement(nums)
// 	fmt.Println("Majority element:", majority)
// }

// func maxProfit(nums []int) int{
// 	currentProfit := 0
// 	buy := 0
// 	sell := 1
// 	count := len(nums)
// 	for buy < count && sell < count {
// 		profit := nums[sell] - nums[buy]
// 		if profit > currentProfit {
// 			currentProfit = profit
// 		}
// 		if profit < 0 {
// 			buy = sell
// 		}
// 		sell++
// 	}
// 	return currentProfit
// }

// func main() {
// 	nums := []int{7,1,5,3,6,4}
// 	maxProfit := maxProfit(nums)
// 	fmt.Println("Max profit:", maxProfit)
// }

// func romanToInt(s string) int {
// 	romanInt := map[byte]int{
// 		'I': 1,
// 		'V': 5,
//         'X': 10,
//         'L': 50,
//         'C': 100,
//         'D': 500,
//         'M': 1000,
// 	}
// 	result := 0
// 	preValue := 0
// 	for i := len(s) - 1; i >= 0; i-- {
// 		currentValue := romanInt[s[i]]
// 		if currentValue >= preValue {
// 			result+= currentValue
// 		} else {
// 			result-= currentValue
// 		}
// 		preValue = currentValue
// 	}
// 	return result
// }

// func main() {
// 	romanLetter := "MCMXCIV"
// 	integer := romanToInt(romanLetter)
// 	fmt.Println("Roman to Integer: ", integer)
// }

// func lengthOfLastWord(s string) int{
// 	s = strings.TrimSpace(s)
// 	var str string
// 	for i := len(s)-1; i >= 0; i-- {
// 		if s[i] != ' ' {
// 			str+= string(s[i])
// 		} else {
// 			break
// 		}
// 	}
// 	return len(str)
// }

// func main() {
// 	s := "   fly me   to   the moon  "
// 	lengthLastWords := lengthOfLastWord(s)
// 	fmt.Println("Length of last word: ", lengthLastWords)
// }

// func longestCommonPrefix(strs []string) string {
// 	preStr := strs[0]
// 	for i := 1 ; i <= len(strs) - 1; i++ {
// 		for j := 0; j <= len(preStr); j++ {
// 			if j >= len(strs[i]) || preStr[j] != strs[i][j] {
// 				preStr = preStr[:j]
// 				break
// 			}
// 		}
// 	}
// 	return preStr
// }

// func main () {
// 	strs := []string{
// 		"flower",
// 		"flow",
// 		"flight",
// 	}
// 	str := longestCommonPrefix(strs)
// 	fmt.Println("Longest common prefix: ", str)
// }

// func strStr(haystack string, needle string) int {
// 	return strings.Index(haystack, needle)
// }

// func main () {
// 	haystack := "sadbutsad"
// 	needle := "aad"
// 	firstIndex := strStr(haystack, needle)
// 	fmt.Println("First occurrence of the string : ", firstIndex)
// }

// func removeDuplicates(nums []int) int {
// 	numCounts := make(map[int]int)
// 	// var result []int
// 	result := []int{}
// 	for _, num := range nums{
// 		numCounts[num]++
// 		if numCounts[num] <= 2 {
// 			result = append(result, num)
// 		}
// 	}

// 	return len(result)
// }

// func main () {
// 	nums := []int{1,1,1,2,2,3}
// 	duplicateCount := removeDuplicates(nums)
// 	fmt.Println("Duplicate Count of medium: ", duplicateCount)
// }

// func isPalindrome(s string) interface{} {
// 	re := regexp.MustCompile(`[^a-zA-Z0-9]+`)
// 	cleanedString := re.ReplaceAllString(s, "")
// 	cleanedString = strings.ToLower(cleanedString)

// 	i := 0
// 	j := len(cleanedString) - 1
// 	for (i < j) {
// 		if cleanedString[i] != cleanedString[j] {
// 			return false
// 		}
// 		i++
// 		j--
// 	}
// 	return true
// }

// func main () {
// 	s := "A man, a plan, a canal, Panama"
// 	result := isPalindrome(s)
// 	fmt.Println("Palindrome Number : ", result)
// }

// func isSubsequence(s string, t string) interface{} {
// 	i := 0
// 	j := 0
// 	for i < len(s) && j < len(t) {
// 		if s[i] == t[j] {
// 			i++
// 			j++
// 		} else {
// 			j++
// 		}
// 	}
// 	if i == len(s) {
// 		return true
// 	}
// 	return false
// }

// func main() {
// 	s := "axc"
// 	t := "ahbgdc"
// 	result := isSubsequence(s, t)
// 	fmt.Println("Subsequence is : ", result)
// }

// func canConstruct(ransomNote string, magazine string) bool {
// 	magazineChar := make(map[rune]int)

// 	for _, char := range magazine {
// 		magazineChar[char]++
// 	}

// 	for _, char := range ransomNote {
// 		if count, exist := magazineChar[char]; !exist || count == 0 {
// 			return false
// 		} else {
// 			magazineChar[char]--
// 		}
// 	}
// 	return true
// }

// func main() {
// 	ransomNote := "aab"
// 	magazine := "baa"
// 	result := canConstruct(ransomNote, magazine)
// 	fmt.Println("Construct : ", result)
// }

// func isIsomorphic(s string, t string) bool {
// 	// s = [e => a, g => d, g => d]
// 	// t = [a => e, d => g, d => g]
// 	if len(s) != len(t) {
// 		return false
// 	}
// 	sMap := make(map[byte]byte)
// 	tMap := make(map[byte]byte)

// 	for i := 0; i < len(s); i++ {
// 		sChar := s[i]
// 		tChar := t[i]

// 		if mappedChar, exists := sMap[sChar]; exists {
// 			if mappedChar != tChar {
// 				return false
// 			}
// 		} else {
// 			sMap[sChar] = tChar
// 		}

// 		if mappedChar, exists := tMap[tChar]; exists {
// 			if mappedChar != sChar {
// 				return false
// 			}
// 		} else {
// 			tMap[tChar] = sChar
// 		}
// 	}
// 	return true
// }

// func main() {
// 	s := "egg"
// 	t := "add"
// 	result := isIsomorphic(s, t)
// 	fmt.Println("Isomorphic is : ", result)
// }

// func wordPattern(pattern string, s string) bool{
// 	sArray := strings.Split(s, " ") // ["dog", "cat", "cat", "dog"]
// 	if len(pattern) != len(sArray) {
// 		return false
// 	}

// 	mapString := make(map[byte]string)
// 	mapPattern := make(map[string]byte)

// 	for i := 0; i < len(pattern); i++ {
// 		stringChar := sArray[i] // string
// 		patternChar := pattern[i] // byte

// 		if mappedChar, exists := mapString[patternChar]; exists {
// 			if mappedChar != stringChar {
// 				return false
// 			}
// 		} else {
// 			mapString[patternChar] = stringChar
// 		}

// 		if mappedChar, exists := mapPattern[stringChar]; exists {
// 			if mappedChar != patternChar {
// 				return false
// 			}
// 		} else {
// 			mapPattern[stringChar] = patternChar
// 		}
// 	}
// 	return true
// }

// func main() {
// 	pattern := "abba"
// 	s := "fish cat cat dog"
// 	result := wordPattern(pattern, s)
// 	fmt.Println("Word Pattern result is : ", result)
// }

// func isAnagram(s string, t string) bool {
// 	// [a => 3, n => 1, g => 1, r => 1, m => 1]
// 	if len(s) != len(t) {
// 		return false
// 	}

// 	mapS := make(map[rune]int)
// 	for _, char := range s {
// 		mapS[char]++
// 	}

// 	for _, char := range t {
// 		if charCount, exists := mapS[char]; !exists || charCount <= 0 {
// 			return false
// 		} else {
// 			mapS[char]--
// 		}
// 	}
// 	return true
// }

// func main() {
// 	s := "rat"
// 	t := "cat"
// 	result := isAnagram(s, t)
// 	fmt.Println("Anagram result is : ", result)
// }

// func twoSum(nums []int, target int) []int {
// 	vToIndex := make(map[int]int) // [2 => 0, 7 => 1, 11 => 2, 15 => 3]

// 	for i, num := range nums {
// 		complement := target - num

// 		if index, exists := vToIndex[complement]; exists {
// 			return []int{index, i}
// 		}

// 		vToIndex[num] = i
// 	}
// 	return []int{}
// }

// func main() {
// 	num := []int{2,7,11,15}
// 	target := 9
// 	result := twoSum(num, target)
// 	fmt.Println("Two sum result is : ", result)
// }

// func isHappy(n int) bool{
// 	seen := map[int]bool{}

// 	for n != 0 {
// 		sum := 0
// 		strN := strconv.Itoa(n)
// 		for i := 0; i < len(strN); i++ {
// 			digit, _ := strconv.Atoi(string(strN[i]))
// 			sum += digit * digit
// 		}
// 		if sum == 1 {
// 			return true
// 		}
// 		if seen[sum] {
// 			return false
// 		}
// 		seen[sum] = true
// 		n = sum
// 	}
// 	return false
// }

// func main() {
// 	n := 20
// 	result := isHappy(n)
// 	fmt.Println("Happy number is : ", result)
// }

// func containsNearbyDuplicate(nums []int, k int) bool {
// 	nMap := map[int]int{}

// 	for index, value := range nums {
// 		if i, exists := nMap[value]; exists {
// 			if index - i <= k {
// 				return true
// 			}
// 		}
// 		nMap[value] = index
// 	}
// 	return false
// }

// func main() {
// 	nums := []int{1,0,1,1}
// 	k := 1
// 	result := containsNearbyDuplicate(nums, k)
// 	fmt.Println("Contain Near By Duplicate Numbers is : ", result)
// }

// func summaryRanges(nums []int) []string {
// 	if len(nums) <= 0 {
// 		return []string{}
// 	}

// 	var result []string
// 	start := nums[0]
// 	end := nums[0]
// 	for i := 1; i < len(nums); i++ {
// 		if nums[i] == nums[i -1] + 1 {
// 			end = nums[i]
// 		} else {
// 			if start == end {
// 				result = append(result, strconv.Itoa(start) + ",")
// 			} else {
// 				result = append(result, strconv.Itoa(start) + "->" + strconv.Itoa(end) + ",")
// 			}

// 			start = nums[i]
// 			end = nums[i]
// 		}
// 	}

// 	if start == end {
// 		result = append(result, strconv.Itoa(start) + ",")
// 	} else {
// 		result = append(result, strconv.Itoa(start) + "->" + strconv.Itoa(end) + ",")
// 	}
// 	return result
// }

// func main() {
// 	nums := []int{0,1,2,4,5,7}
// 	result := summaryRanges(nums)
// 	fmt.Println("Summary Ranges result is : ", result)
// }

// func isValid(s string) bool {
// 	mapPattern := map[rune]rune{
// 		'(' : ')',
// 		'{' : '}',
// 		'[' : ']',
// 	}

// 	var store []rune // )

// 	for _, str := range s{ // (
// 		if val, exists := mapPattern[str]; exists {
// 			store = append(store, val)
// 		} else {
// 			if len(store) == 0 || store[len(store) - 1] != str {
// 				return false
// 			}
// 			store = store[:len(store) - 1]
// 		}
// 	}
// 	if len(store) == 0 {
// 		return true
// 	} else {
// 		return false
// 	}
// }

// func main() {
// 	s := "(){}{[]}}"
// 	result := isValid(s)
// 	fmt.Println("The valid parenthesis is : ", result)
// }

// type ListNode struct {
// 		Val int
// 	    Next *ListNode
// 	}

// func hasCycle(head *ListNode) bool {
// 	if head == nil {
// 		return false
// 	}

// 	slow := head
// 	fast := head

// 	for slow != nil && fast != nil && fast.Next != nil {
// 		slow = slow.Next
// 		fast = fast.Next.Next
// 		if slow == fast {
// 			return true
// 		}
// 	}
// 	return false
// }

// type ListNode struct {
// 	Val int
// 	Next *ListNode
// }

// func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
// 	dummy := &ListNode{}
// 	current := dummy
// 	carry := 0

// 	for l1 != nil || l2 != nil {
// 		sum := carry

// 		if l1 != nil {
// 			sum += l1.Val
// 			l1 = l1.Next
// 		}

// 		if l2 != nil {
// 			sum += l2.Val
// 			l2 = l2.Next
// 		}

// 		carry = sum / 10
// 		sum = sum % 10

// 		dummy = &ListNode{Val: sum}
// 		dummy = dummy.Next
// 	}
// 	if carry > 0 {
// 		dummy = &ListNode{Val: carry}
// 	}
// 	return current
// }

// type ListNode struct {
// 	Val int
// 	Next *ListNode
// }

// func mergeTwoLists(list1 *ListNode, list2 *ListNode) *ListNode {
// 	current := &ListNode{}
// 	result := current
// 	for list1 != nil && list2 != nil {
// 		if list1.Val <= list2.Val {
// 			current.Next = &ListNode{Val: list1.Val}
// 			current = current.Next
// 			list1 = list2.Next
// 		} else {
// 			current.Next = &ListNode{Val: list2.Val}
// 			current = current.Next
// 			list2 = list2.Next
// 		}
// 	}

// 	for list1 != nil {
// 		current.Next = &ListNode{Val: list1.Val}
// 		current = current.Next
// 		list1 = list1.Next
// 	}

//     for list2 != nil {
// 		current.Next = &ListNode{Val: list2.Val}
// 		current = current.Next
// 		list2 = list2.Next
// 	}
// 	return result.Next
// }

// type TreeNode struct {
//     Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func maxDepth(root *TreeNode) int {
// 	if root == nil {
// 		return 0
// 	}

// 	queue := []*TreeNode{root}
// 	depth := 0
// 	if len(queue) > 0 {
// 		depth++
// 		levelSize := len(queue) // 1
// 		for i := 0; i < levelSize; i++ {
// 			current := queue[0]
// 			queue = queue[1:]

// 			if current.Left != nil {
// 				queue = append(queue, current.Left)
// 			}
// 			if current.Right != nil {
// 				queue = append(queue, current.Right)
// 			}
// 		}
// 	}
// 	return depth
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func isSameTree(p *TreeNode, q *TreeNode) bool {
// 	if p == nil && q == nil {
// 		return true
// 	}

// 	if p == nil || q == nil {
// 		return false
// 	}

// 	queueP := []*TreeNode{p}
// 	queueQ := []*TreeNode{q}
// 	for len(queueP) > 0 && len(queueQ) > 0 {
// 		currentP := queueP[0] // p
// 		queueP = queueP[1:]
// 		currentQ := queueQ[0] // q
// 		queueQ = queueQ[1:]

// 		if currentP.Val != currentQ.Val {
// 			return false
// 		}

// 		if currentP.Left != nil && currentQ.Left == nil {
// 			return false
// 		}
// 		if currentP.Left == nil && currentQ.Left != nil {
// 			return false
// 		}

// 		if currentP.Right != nil && currentQ.Right == nil {
// 			return false
// 		}
// 		if currentP.Right == nil && currentQ.Right != nil {
// 			return false
// 		}

// 		if currentP.Left != nil && currentQ.Left != nil {
// 			queueP = append(queueP, currentP.Left)
// 			queueQ = append(queueQ, currentQ.Left)
// 		}

// 		if currentP.Right != nil && currentQ.Right != nil {
// 			queueP = append(queueP, currentP.Right)
// 			queueQ = append(queueQ, currentQ.Right)
// 		}
// 	}
// 	return len(queueP) == 0 && len(queueQ) == 0
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func invertTree(root *TreeNode) *TreeNode {
// 	if root == nil {
// 		return nil
// 	}

// 	queue := []*TreeNode{root}
// 	for len(queue) > 0 {
// 		current := queue[0]
// 		queue = queue[1:]

// 		left := current.Left
// 		current.Left = current.Right
// 		current.Right = left

// 		if current.Left != nil {
// 			queue = append(queue, current.Left)
// 		}
// 		if current.Right != nil {
// 			queue = append(queue, current.Right)
// 		}
// 	}
// 	return root
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func isTrue(left, right *TreeNode) bool{
// 	if left == nil || right == nil {
// 		return left == right
// 	}

// 	if left.Val != right.Val {
// 		return false
// 	}

// 	return isTrue(left.Left, right.Right) && isTrue(left.Right, right.Left)
// }

// func isSymmetric(root *TreeNode) bool {
// 	if root == nil {
// 		return false
// 	}

// 	return isTrue(root.Left, root.Right)
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func hasPathSum(root *TreeNode, targetSum int) bool {
// 	if root == nil {
// 		return false
// 	}

// 	type NodeSumPair struct{
// 		Node *TreeNode
// 		Sum int
// 	}

// 	queue := []NodeSumPair{{Node: root, Sum: root.Val}}

// 	for len(queue) > 0 {
// 		currentPair := queue[0]
// 		queue = queue[1:]

// 		currentNode := currentPair.Node
// 		currentSum := currentPair.Sum

// 		if currentNode.Left == nil && currentNode.Right == nil && currentSum == targetSum {
// 			return true
// 		}

// 		if currentNode.Left != nil {
// 			queue = append(queue, NodeSumPair{Node: currentNode.Left, Sum: currentSum + currentNode.Left.Val})
// 		}
// 		if currentNode.Right != nil {
// 			queue = append(queue, NodeSumPair{Node: currentNode.Right, Sum: currentSum + currentNode.Right.Val})
// 		}
// 	}
// 	return false
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func countNodes(root *TreeNode) int {
// 	if root == nil {
// 		return 0
// 	}

// 	queue := []*TreeNode{root}
// 	count := 0

// 	for len(queue) > 0 {
// 		count++
// 		current := queue[0]
// 		queue = queue[1:]

// 		if current.Left != nil {
// 			queue = append(queue, current.Left)
// 		}

// 		if current.Right != nil {
// 			queue = append(queue, current.Right)
// 		}
// 	}
// 	return count
// }

// type TreeNode struct {
// 	Val int
//     Left *TreeNode
//     Right *TreeNode
// }

// func averageOfLevels(root *TreeNode) []float64 {
// 	result := []float64{}
// 	if root == nil {
// 		return result
// 	}

// 	queue := []*TreeNode{root}
// 	for len(queue) > 0 {
// 		count := len(queue)
// 		sum := 0

// 		for i := 0; i < count; i++ {
// 			current := queue[0]
// 			queue = queue[1:]

// 			sum += current.Val

// 			if current.Left != nil {
// 				queue = append(queue, current.Left)
// 			}

// 			if current.Right != nil {
// 				queue = append(queue, current.Right)
// 			}
// 		}
// 		result = append(result, float64(sum) / float64(count))
// 	}
// 	return result
// }

type TreeNode struct {
	Val int
    Left *TreeNode
    Right *TreeNode
}

func getMinimumDifference(root *TreeNode) int {
	if root == nil {
		return 0
	}

	miniDiff := math.MaxInt32
	queue := []*TreeNode{root}

	for len(queue) > 0 {
		current := queue[0]
		queue = queue[1:]

		if current.Left != nil {
			diff := current.Val - current.Left.Val
			if miniDiff > diff {
				miniDiff = diff
			}
			queue = append(queue, current.Left)
		}

		if current.Right != nil {
			diff := current.Right.Val - current.Val
			if miniDiff > diff {
				miniDiff = diff
			}
			queue = append(queue, current.Right)
		}
	}
	return miniDiff
}