
fetch("products.json")
.then(function(response){
	return response.json();
})
.then(function(products){
	let placeholder = document.querySelector("#data-output");
	let out = "";
	for(let product of products){
		out += `
			<tr>
			<td>${product.srn}</td>
				<td> <img src='${product.image}'> </td>
				<td>${product.name}</td>
				<td>${product.datein}</td>
				<td>${product.dateout}</td>
				<td>${product.age}</td>
				<td>${product.address}</td>
				<td>${product.recived}</td>
				<td>${product.district}</td>
				<td>${product.state}</td>
				<td>${product.aadharno}</td>
				<td>${product.status}</td>
			</tr>
		`;
	}

	placeholder.innerHTML = out;


});