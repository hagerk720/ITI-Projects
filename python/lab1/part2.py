#1- Given a list of numbers, create a function that returns a list where all similar adjacent

def remove_duplicates(list_with_duplicates):
    seen = {}
    new_list = []
    for x in list_with_duplicates:
        if x not in seen:
            seen[x] = True
            new_list.append(x)
    return new_list
def take_list_from_user():
    list_with_duplicates = input("Enter list of numbers separated by commas: ")
    list_with_duplicates = list_with_duplicates.split(",")
    return list_with_duplicates
################## Call Functions #################
# list_with_duplicates = take_list_from_user()
# new_list = remove_duplicates(list_with_duplicates)
# print("List without duplicates: ", new_list)
################## -------------- #################
# 2-​​Consider dividing a string into two halves

def front_back_combine(a, b):
    a_len = len(a)
    b_len = len(b)
    a_front, a_back = a[:divmod(a_len, 2)[0] + divmod(a_len, 2)[1]], a[divmod(a_len, 2)[0] + divmod(a_len, 2)[1]:]
    b_front, b_back = b[:divmod(b_len, 2)[0] + divmod(b_len, 2)[1]], b[divmod(b_len, 2)[0] + divmod(b_len, 2)[1]:]
    return a_front + b_front + a_back + b_back

def take_2_strings_from_user():
        first_str = input("Enter first string: ")
        second_str = input("Enter second string: ")
        return first_str,second_str
################## Call Functions #################
# first_str, second_str =take_2_strings_from_user()
# result = front_back_combine(first_str, second_str)
# print(result)
################## -------------- #################

# 3- Write a Python function that takes a sequence of numbers and determines whether all the numbers are different from each other.
def is_unique(list_with_duplicates):
    new_list = list(set(list_with_duplicates))
    if len(new_list) == len(list_with_duplicates):
        return True
    return False
def take_numbers_from_user():
    list_with_duplicates = input("Enter list of numbers separated by commas to see if unique: ")
    list_with_duplicates = list_with_duplicates.split(",")
    return list_with_duplicates

################## Call Functions #################
# list_with_duplicates = take_numbers_from_user()
# output = is_unique(list_with_duplicates)
# if(output):
#     print("Unique")
# else:
#     print("Not unique")
################## -------------- #################

# 4- Given unordered list, sort it using algorithm bubble sort
def bubbleSort( theSeq ):
    n = len( theSeq )
    for i in range( n - 1 ) :
        flag = 0
        for j in range(n - 1) :
            
            if theSeq[j] > theSeq[j + 1] : 
                tmp = theSeq[j]
                theSeq[j] = theSeq[j + 1]
                theSeq[j + 1] = tmp
                flag = 1
        if flag == 0:
            break

    return theSeq

def take_unsorted_numbers_from_user():
    unsorted_numbers = input("Enter list of numbers to be sorted separated by commas: ")
    unsorted_numbers = unsorted_numbers.split(",")
    return unsorted_numbers

################## Call Functions #################
# elements = take_unsorted_numbers_from_user()
# result = bubbleSort(elements)
# print (result)
################## -------------- #################


# 5-Guesses game
import random
def guesses_game():
    answer = random.randint(1,100)
    tries = 10
    guessed_nums = set()

    while tries > 0:
        guess = input("guess a number between 0 and 100: ")
        if int(guess) > 100 or int(guess) < 0:
            print("Not allowed. Please enter a number between 1 and 100.")
            continue
        if int(guess) in guessed_nums:
            print("You've already guessed that number. Try a different one.")
            continue

        guessed_nums.add(int(guess))
                
        if int(guess) == answer:
            print("Congratulations! You guessed the number in", 10 - tries + 1, "tries.")
            play_again = input("Do you want to play again? (y/n): ")
            if play_again.lower() == "y":
                guesses_game()
            else:
                print("Thanks for playing!")
            return

        if int(guess) < answer:
            print("Too low. Guess again.")
        else:
            print("Too high. Guess again.")

        tries -= 1


    print("You used up all your tries. The answer was", answer)
    play_again = input("Do you want to play again? (y/n): ")
    if play_again.lower() == "y":
        guesses_game()
    else:
        print("Thanks for playing!")




import random

def get_guess():
    guess = input("guess a number between 0 and 100: ")
    while True:
        try:
            guess = int(guess)
            if guess < 0 or guess > 100:
                print("Not allowed. Please enter a number between 1 and 100.")
            else:
                return guess
        except ValueError:
            print("Not a valid input. Please enter a number between 1 and 100.")
        guess = input("guess a number between 0 and 100: ")

def play_game():
    answer = random.randint(1,100)
    tries = 10
    guessed_nums = set()
    while tries > 0:
        guess = get_guess()
        if guess in guessed_nums:
            print("You've already guessed that number. Try a different one.")
            continue
        guessed_nums.add(guess)
        if guess == answer:
            print("Congratulations! You guessed the number in", 10 - tries + 1, "tries.")
            return True
        if guess < answer:
            print("Too low. Guess again.")
        else:
            print("Too high. Guess again.")
        tries -= 1
    print("You used up all your tries. The answer was", answer)
    return False

def main():
    play_again = True
    while play_again:
        if play_game():
            play_again = input("Do you want to play again? (y/n): ").lower() == "y"
        else:
            play_again = False
    print("Thanks for playing!")

################## Call Functions #################    
# main()
################## -------------- #################

   
   