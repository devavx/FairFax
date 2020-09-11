<html>
    <body>
        <h1>Hello, A new customer has contacted. Below are the details of customer:</h1>
		
		<h3>Customer Information</h3>
		<p>Name : {{ $f_name }} {{ $l_name }}</p>
		<p>Phone : {{ $Pno}}</p>
		<p>Email : {{ $email}}</p>
		<p>Address : {{ $add.",".$city.",".$state}}</p>
		<p>Alternate Phone : {{ $AlPno}}</p>
		<p>Best Time : {{ $bestTime}}</p>
		<p>Contact Time</p> : {{ $contactBy}}</p>
    </body>
</html>