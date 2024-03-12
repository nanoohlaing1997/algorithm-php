package main

import "fmt"

func main() {
	a := []int{1, 2, 3, 4, 5}
	r, p := a[:2]
	fmt.Println(r)
	fmt.Println(p)
}

//[1,2]
