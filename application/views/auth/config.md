## Authentication Configuration

- [The User Function](#user)
- [The Attempt Function](#attempt)
- [The Logout Function](#logout)

Most interactive applications have the ability for users to login and logout. Obvious, right? Laravel provides a simple class to help you validate user credentials and retrieve information about the current user of your application.

To get started, let's look over the **application/config/auth.php** file. The authentication configuration contains three functions: **user**, **attempt**, and **logout**. Don't worry, they are all dead simple. Let's go over each one individually.

<a name="user"></a>
### The "User" Function

The **user** function is called when Laravel needs to retrieve the currently logged in user of your application. When a user logs into your application, Laravel stores the ID of that user in the [session](/docs/public/session/config). So, on subsequent requests, we can use the ID stored in the session to retrieve the user's information from storage. However, applications use various data stores. For this reason, you are given complete flexibility regarding how to retrieve the user.

Of course, a simple default configuration has been setup for you. Let's take a look:

	'user' => function($id)
	{
		if ( ! is_null($id) and filter_var($id, FILTER_VALIDATE_INT) !== false)
		{
			return User::find($id);
		}
	}

As you probably noticed, the user's ID is passed to the function. The default configuration utilizes an User [Eloquent model](/docs/public/database/eloquent) to retrieve and return the user from the database. Of course, you are free to use other methods of retrieving the user, such as the [fluent query builder](/docs/public/database/query) or [Redis](/docs/public/database/redis). If no user is found in storage for the given ID, the function should simply return **null**.

<a name="attempt"></a>
### The "Attempt" Function

Anytime you need to validate the credentials of a user, the **attempt** function is called. When attempting to authenticate a user, you will typically retrieve the user out of storage, and check the hashed password against the given password. However, since applications may use various methods of hashing or even third-party login providers, you are free to implement the authentication however you wish. Again, a simple and sensible default has been provided:

	'attempt' => function($username, $password, $config)
	{
		$user = User::where($config['username'], '=', $username)->first();

		if ( ! is_null($user) and Hash::check($password, $user->password))
		{
			return $user;
		}
	}

Like the previous example, an Eloquent User model is used to retrieve the user out of the database by the given username. If the user is found, the given password is hashed and compared against the hashed password stored on the table, and if the passwords match, the user model is returned. If the credentials are invalid or the user does not exist, **null** should be returned.

Notice that the entire authentication configuration is passed to this function. This gives you convenient access to the **username** configuration option, which determines the database column that is considered the "username".

> **Note:** Any object may be returned by this function as long as it has an **id** property.

<a name="logout"></a>
### The "Logout" Function

As you may have guessed, the **logout** function is called whenever a user is logged out of your application. This function gives you a convenient location to interact with any third-party authentication providers you may be using.
