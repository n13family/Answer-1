  function is_username_valid(username){
		if((/^[a-z]+$/.test(username)) == true && (username.length == 8) == true)
		{
			return true;
  
		} else 

        {
          return false;
        }
  }

  function is_password_valid(username){
		if((/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(username)) == true)
		{
			return true;
  
		} else 

        {
          return false;
        }
  }