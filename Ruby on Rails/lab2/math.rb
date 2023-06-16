
class User

    attr_accessor :name
  
    @@name = 'user'
  

    def initialize(name = 'user')
      @name = name
    end
  

    def self.name()
      @@name
    end
  

    def changeName(new_name)
      @name = new_name
    end
  

    def setName(name)
      @name = name
    end
  

    def getName()
      @name
    end
  
  end
  
  
  firstUser= User.new
  secondUser= User.new("Mariam")
  puts "firstUser Name = #{firstUser.name}"
  puts "secondUser Name = #{secondUser.name}"
  puts "firstUser Name = #{firstUser.getName} From getter"
  puts "secondUser Name = #{secondUser.getName} From getter"
  firstUser.setName("Yosra")
  puts "firstUser Name = #{firstUser.getName} After setting New Value"