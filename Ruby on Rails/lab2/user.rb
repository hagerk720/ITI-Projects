class MATH
    def calc(firstNumber, secondNumber, operator)
      unless firstNumber.is_a?(Numeric) && secondNumber.is_a?(Numeric)
        raise "Please enter valid numbers"
      end
  
      case operator
      when "+"
        result = firstNumber + secondNumber
      when "-"
        result = firstNumber - secondNumber
      when "*"
        result = firstNumber * secondNumber
      when "/"
        if secondNumber != 0
          result = firstNumber.to_f / secondNumber
        else
          raise "Error! Divide by 0"
        end
      else
        raise "Please enter a valid operator."
      end
  
      puts "The result of #{firstNumber} #{operator} #{secondNumber} = #{result}"
    end
  end
  
  operation = MATH.new
  operation.calc(5, 8, "+")
  operation.calc(5, 8, "*")
  operation.calc(5, 3, "-")
  operation.calc(5, 8, "/")
  operation.calc("m", 3, "+")