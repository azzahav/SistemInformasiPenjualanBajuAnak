<html>
<head>
	<title>Add Customer</title>
    
    <style>
    body{
	font-family: sans-serif;
	background:#E9967A;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_add{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_add{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.add_cus{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_add{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
header {
    background-color: #ffffff;
    height: 80px;
    top: 0px;
    right: 0px;
    left: 0px;
    position: fixed;
    display: flex;
    justify-content: space-between;
    }
    nav li {
    list-style: none;
    display: inline-block;
    font-weight: bold;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 10px;
}
a {
        text-decoration: none;
    }
</style>
</head>
<body>
<header>
      <img id="logo" src="shop.png" width="150px" height="80px"/>
      <nav>
        <ul>
        <a href='index.php'><li> View Users</li></a>
        <a href="index.php"><li>Home</li></a>
        </ul>
      </nav>
    </header>
 
	<h1>Add Item</h1>
 
	<div class="kotak_add">
		<p class="tulisan_add">Silahkan isi data</p>
 
		<form action="add.php" method="post" name="form1">
			<label>Nama</label>
			<input type="text" class = "add_cus" name="nama"  required autofocus>

            <label>Email</label>
            <input type="text" class = "add_cus" name="email" required autofocus>
            
            <label>Password</label>
            <input type="text" class= "add_cus" name="password"  required autofocus>

            <label>Phone</label>
            <input type="text" class= "add_cus" name="phone"  required autofocus>

            <label>Address</label>
            <input type="text" class= "add_cus" name="addres" required autofocus>

            <label>Citi</label>
            <input type="text" class= "add_cus" name="city"  required autofocus>
            
			<input type="submit" name="Submit" value="Add" class="tombol_add">
 
			<br/>
			<br/>
			
		</form>
		
    </div>
    <?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $addres=$_POST['addres'];
    $city=$_POST['city'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO customer(nama,email,password,phone,addres,city) VALUES('$nama','$email','$password','$phone','$addres','$city')");

    // Show message when user added
	
	header("Location: index.php");
	echo "User added successfully.";
}
?>

</body>
</html>