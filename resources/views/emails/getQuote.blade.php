<html>
    <body>
        <h1>Hello, {{ $f_name }} {{ $l_name }}</h1>
		
		<h3>Customer Information</h3>
		<p>Name : {{ $f_name }} {{ $l_name }}</p>
		<p>Phone : {{ $phone}}</p>
		<p>Email : {{ $email}}</p>
		<p>Loan Type : {{ $loan_type}}</p>
		<p>Loan Amount : {{ $loan_amount}}</p>
		<p>Property Value : {{ $property_value}}</p>
		<p>Credit Score : {{ $credit_score}}</p>
    </body>
</html>