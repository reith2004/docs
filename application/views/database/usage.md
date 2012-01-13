## Database Usage

### Queries

Running queries against a database connection is a breeze using the **query** method on the DB class:

	$users = DB::query('select * from users');

The **query** method also allows you to specify bindings for your query in the second parameter to the method:

	$users = DB::query('select * from users where name = ?', array('test'));

The return value of the query method depends on the type of query that is executed:

- **SELECT** statements will return an array of stdClass objects with properties corresponding to each column on the table.
- **INSERT** statements will return **true** or **false**, depending on the success of the query.
-  **UPDATE** and **DELETE** statements will return the number of rows affected by the query.

When you need to get only one record from a table, use the **first** method. The method will return a single stdClass instance, or NULL if no records are found:

	$user = DB::first('select * from users where id = 1');

Soemtimes you may need to only retrieve a single column from the database. You can use the **only** method to only retrieve that column's value from the query instead of an entire object:

	$email = DB::only('select email from users where id = 1');

### Connections

Need to get the raw PDO object for a connection? It's easy. Just mention the connection name to the **connection** method on the DB class:

	$pdo = DB::connection('sqlite');

> **Note:** If no connection name is specified, the **default** connection will be returned.

### Driver

Want to know which PDO driver is being used for a connection? Check out the **driver** method:

	$driver = DB::driver('connection_name');

> **Note:** If no connection name is specified, the **default** connection driver will be returned.