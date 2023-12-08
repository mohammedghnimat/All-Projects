const url = 'http://localhost/API/create_product.php';

const data = {
  image: 'product3.jpg',
  name: 'Product hiiii',
  description: 'hellooo inserrttt testt 1',
  price: 19.99,
  price_after_discount: 16.49,
  category_id: 2,
  gender: 'Men'
};

const options = {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(data)
};

fetch(url, options)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // Handle the response data
  })
  .catch(error => {
    console.error('Error:', error);
    // Handle any errors
  });