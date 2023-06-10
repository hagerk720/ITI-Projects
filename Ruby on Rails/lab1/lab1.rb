# ----- Q1 ------
def print_a(n)
    a= "a"
    for i in 1..n do 
        p a * (i+1)
    end

end
print_a(3)
# ----- Q2 ----
def string_check(str)
    if str.start_with?"if"
        p "true" 
    else
        p "false"
    end  
end  
string_check("ifhager")  
# ----- Q3 ----
def exchange_char(str)
    if str.length  > 1
    temp = str[0]
    str[0] = str[-1]
    str[-1] = temp
    end    
    return str
end
p exchange_char("hager") 
# ----- Q4 -----
def exchange_char2(str)
    if str.length  > 1
    new_str = "#{str[-1]}#{str}#{str[-1]}"
    end    
    return new_str
end
p exchange_char2("hager") 
# ---- Q5 ----
def leap_year?(year)
    if (year % 4 == 0 && year % 100 != 0) || (year % 400 == 0)
      return true
    else
      return false
    end
  end
p leap_year?(2012)  
# ----- Q6 -----
def rotate_left(nums)
    rotated_nums = nums[1..-1] + [nums[0]]
    return rotated_nums
end
output = rotate_left([2,5,1])
p output
# ---- Q7 -----
def compute_sum(numbers)
    sum = 0
    skip_next = false
  
    numbers.each do |num|
      if num == 17
        skip_next = true
        next
      end
  
      if skip_next
        skip_next = false
        next
      end
  
      sum += num
    end
  
    return sum
end
p compute_sum([3 , 5 ,17 ,6])
