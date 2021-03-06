<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
	</head>
	<body>
        <div id="container">
        <div id="topnav">
          <ul>
            <li><a href="/Welcome">Home</a></li>
            <li><a href="/Catalog">Catalog</a></li>
            <li id="roles"><form action="">
                <select name="roles">
                <option value="guest">Guest</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
                </select>
                </form>
            </li>
          </ul>
        </div>
			{content}
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
				{ci_version}</p>
        </div>
	</body>
</html>
