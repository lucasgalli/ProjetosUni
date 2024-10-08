import React, { useState } from "react";

const Contador = () => {
	const [count, setCount] = useState(0);

	const increment = () => {
		setCount(count + 1);
	};

	const decrement = () => {
		setCount(count - 1);
	};

	return (
		<div>
			<p>Contador: {count}</p>
			<button onClick={increment}>Incrementar</button>
			<button onClick={decrement}>Decrementar</button>
		</div>
	);
};

export default Contador;
