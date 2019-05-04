  function is_username_valid(username){
		if((/^[a-z]{8}$/.test(username)) == true)
		{
			return true;
  
		} else 

        {
          return false;
        }
  }

  function is_password_valid(password){
		if((/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8}$/.test(password)) == true)
		{
			return true;
  
		} else 

        {
          return false;
        }
  }
