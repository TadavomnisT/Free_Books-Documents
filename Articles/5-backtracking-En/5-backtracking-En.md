 
# Backtracking Algorithm in Artificial Intelligence

## Abstract

In this article, we discuss in detail a fundamental algorithm in artificial intelligence called backtracking and answer the following questions:

* What is the n-rooks (rook polynomial) problem?
* What is the n-queens problem?
* What is the backtracking algorithm?
* How can we solve the n-rooks problem using the backtracking approach?
* How can we solve the n-queens problem using the backtracking approach?
* How can we print an array as a tree structure in PHP?

## The n-Queens and n-Rooks Problem

One of the fundamental goals in artificial intelligence is to model our problems with mathematics and solve them using appropriate algorithms. Backtracking refers to a particular type of algorithm where we can find solutions to a mathematical problem by exploring and backtracking (undoing) steps. To explain this concept, I will use two well-known examples.

I propose two questions:


**Question 1:**
Difficulty Level: Medium to Hard

* We want to place n rooks on an n×n chessboard in such a way that they do not attack each other, meaning none of them can capture another one. For each input n, print all the possible answers as a matrix...

**For n = 1: Only one answer should be printed:**

```
1
```

**For n = 2: Two answers should be printed:**

```
10
01

01
10
```

**For n = 3: Six answers should be printed:**

```
100
010
001

001
010
100

010
001
100

001
100
010

010
100
001

100
001
010
```

Note 1: We represent our chessboard as binary square matrices where 1s represent the rooks and 0s represent empty cells.

Note 2: Keep in mind that a rook can only move in its row, column, and attack diagonals.
_______________________________________________

And the second question, which in truth is a more complex version of the first question:


**Question 2:**
Difficulty Level: Medium to Hard

I want to extend the example of the n-rooks problem to a better and more comprehensive puzzle.

* We want to place n queens on an n×n chessboard in such a way that they do not attack each other, meaning none of them can capture another one. For each input n, print all the possible answers as a matrix...

**For n = 1: Only one answer should be printed:**

```
1
```

**For n = 2: No answers should be printed!**

The problem does not have a solution for n = 2.

**For n = 3: No answers should be printed!!**

The problem does not have a solution for n = 3.

**For n = 4: Two answers should be printed:**

```
0010
1000
0001
0100

0100
0001
1000
0010
```

**For n = 5: Ten answers should be printed:**

```
00010
01000
00001
00100
10000

01000
00010
10000
00100
00001

10000
00100
00001
01000
00010

10000
00010
01000
00001
00100

00001
00100
10000
00010
01000

00100
10000
00010
01000
00001

00100
00001
01000
00010
10000

00001
01000
00010
10000
00100

01000
00001
00100
10000
00010

00010
10000
00100
00001
01000
```

**And here are the visual representations of these ten answers (n = 5) for better comprehending:**

![5 Queens](Files/5queens.jpg)

(Note: I don't remember the source of the image.)



Note 1: We represent our chessboard as binary square matrices where 1s represent the queens and 0s represent empty cells.

Note 2: Keep in mind that a queen can move in its row, column, and diagonals to attack.


## What is the Backtracking Algorithm?


Well, now it's time to answer these questions that we've presented. But before that, I'll explain a few necessary concepts:



The n-queens problem is one of the challenging problems for mathematicians and has led them to seek optimal solutions. However, since the problem may be confusing for beginners, I decided to start with a simpler version, which is the n-rooks problem. It serves as a simplified version of the n-queens problem. Remember, programmers and algorithm designers primarily focus on the n-queens problem.

Scientists and academic professors commonly discuss the n-queens problem along with other simple problems to establish a connection between algorithm science and artificial intelligence, aiming to explain artificial intelligence algorithms through them.

There are infinite approaches to solving the n-queens problem as well as the n-rooks problem. These include solutions derived from algorithm science and artificial intelligence, mathematical and matrix-based solutions, and the solutions that have not been discovered yet...



* Backtracking Algorithm
    * Monte Carlo Algorithm
* Constraint Satisfaction Problem (CSP) Algorithm
* Heuristic Algorithm
* Hill Climbing Algorithm
* Local Search Algorithm
* Genetic Algorithm
* And other algorithms that are not mentioned...

My goal here is to solve this problem using the Backtracking algorithm.

There are two reasons why I chose this approach (backtracking):

1. This approach utilizes the decision tree structure. It uses modeling through tree structures, allowing me to introduce trees to some extent.
2. This approach is based on the "trial and error" method, which is the first solution that comes to mind for all humans.

_______________________________________________

### Why are trees important in computer science?

