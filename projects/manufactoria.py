# -----------------------------------------+
# Your name                                |
# CS 1, Assignment 9                       |
# Last Updated: Month Day, Year            |
# -----------------------------------------|
# Describe the assignment briefly here.    |
# -----------------------------------------+


# --------------------------------------------------+
# manufactoria: The main function for Assignment 7. |
# --------------------------------------------------+

def manufactoria():

    # test strings to see if they contain three or more blues
    
    print("Testing three or more blues")
    print("---------------------------")
    test(three_or_more_blues, "")
    test(three_or_more_blues, "r")
    test(three_or_more_blues, "b")
    test(three_or_more_blues, "brrrrrbrrrrr")
    test(three_or_more_blues, "rrrrbrrrr")
    test(three_or_more_blues, "brrrrrbrrrrrb")
    test(three_or_more_blues, "bbb")
    test(three_or_more_blues, "rbrbrbrbr")

    # test to see if strings contain alternating numbers of 
    # the same symbol that are odd numbers that increase by 2.

    print()
    print("Testing alternating colors")
    print("--------------------------")

    # these tests should accept
    test(alternating_colors, "")
    test(alternating_colors, "r")
    test(alternating_colors, "rb")
    test(alternating_colors, "rbrbrbr")
    test(alternating_colors, "b")
    test(alternating_colors, "brbr")
    test(alternating_colors, "brbrbrbr")

    # these tests should not accept
    test(alternating_colors, "rr")
    test(alternating_colors, "bb")
    test(alternating_colors, "rbrbrrbr")
    test(alternating_colors, "brbbbr")

# -----------------------------------------------------------+
# test: Determine whether a given function accepts a string. |
# -----------------------------------------------------------|
# fn: The function to use, e.g. three_or_more_blues          |
# string: The string to test, e.g. "rrrbbb"                  |
# -----------------------------------------------------------+
    
def test(fn, string):

    if fn(string):
        result = "accepted"
    else:
        result = "not accepted"

    print('The string "' + string + '" is ' + result)

# -----------------------------------------------------------+

manufactoria()       # run the simulation